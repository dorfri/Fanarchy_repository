<?php

/**
 * Fangroup form base class.
 *
 * @method Fangroup getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFangroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'agerangestart'   => new sfWidgetFormInputText(),
      'agerangeend'     => new sfWidgetFormInputText(),
      'gender'          => new sfWidgetFormInputText(),
      'homepage'        => new sfWidgetFormInputText(),
      'Team_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'Address_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'Mediapicture_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'segments_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Segment')),
      'site_users_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255)),
      'agerangestart'   => new sfValidatorInteger(),
      'agerangeend'     => new sfValidatorInteger(),
      'gender'          => new sfValidatorString(array('max_length' => 10)),
      'homepage'        => new sfValidatorString(array('max_length' => 255)),
      'Team_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'Address_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'required' => false)),
      'Mediapicture_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'required' => false)),
      'segments_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Segment', 'required' => false)),
      'site_users_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fangroup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fangroup';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['segments_list']))
    {
      $this->setDefault('segments_list', $this->object->Segments->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['site_users_list']))
    {
      $this->setDefault('site_users_list', $this->object->SiteUsers->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveSegmentsList($con);
    $this->saveSiteUsersList($con);

    parent::doSave($con);
  }

  public function saveSegmentsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['segments_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Segments->getPrimaryKeys();
    $values = $this->getValue('segments_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Segments', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Segments', array_values($link));
    }
  }

  public function saveSiteUsersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['site_users_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SiteUsers->getPrimaryKeys();
    $values = $this->getValue('site_users_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SiteUsers', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SiteUsers', array_values($link));
    }
  }

}
