<?php

/**
 * Team form base class.
 *
 * @method Team getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'websiteurl'      => new sfWidgetFormInputText(),
      'stadiumname'     => new sfWidgetFormInputText(),
      'phonenumber'     => new sfWidgetFormInputText(),
      'fax'             => new sfWidgetFormInputText(),
      'createddate'     => new sfWidgetFormDateTime(),
      'Sporttype_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sporttype'), 'add_empty' => true)),
      'League_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('League'), 'add_empty' => true)),
      'Mediapicture_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Homeaddress_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'site_users_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 250)),
      'websiteurl'      => new sfValidatorString(array('max_length' => 255)),
      'stadiumname'     => new sfValidatorString(array('max_length' => 255)),
      'phonenumber'     => new sfValidatorString(array('max_length' => 20)),
      'fax'             => new sfValidatorString(array('max_length' => 10)),
      'createddate'     => new sfValidatorDateTime(),
      'Sporttype_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sporttype'), 'required' => false)),
      'League_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('League'), 'required' => false)),
      'Mediapicture_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'required' => false)),
      'Homeaddress_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'required' => false)),
      'site_users_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('team[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Team';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['site_users_list']))
    {
      $this->setDefault('site_users_list', $this->object->SiteUsers->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveSiteUsersList($con);

    parent::doSave($con);
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
