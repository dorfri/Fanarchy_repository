<?php

/**
 * Segment form base class.
 *
 * @method Segment getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSegmentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'agerangestart'  => new sfWidgetFormInputText(),
      'agerangeend'    => new sfWidgetFormInputText(),
      'estimatedreach' => new sfWidgetFormInputText(),
      'Gender_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'add_empty' => true)),
      'addresses_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Address')),
      'fangroups_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup')),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 255)),
      'agerangestart'  => new sfValidatorInteger(),
      'agerangeend'    => new sfValidatorInteger(),
      'estimatedreach' => new sfValidatorInteger(),
      'Gender_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'required' => false)),
      'addresses_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Address', 'required' => false)),
      'fangroups_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('segment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Segment';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['addresses_list']))
    {
      $this->setDefault('addresses_list', $this->object->Addresses->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['fangroups_list']))
    {
      $this->setDefault('fangroups_list', $this->object->Fangroups->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAddressesList($con);
    $this->saveFangroupsList($con);

    parent::doSave($con);
  }

  public function saveAddressesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['addresses_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Addresses->getPrimaryKeys();
    $values = $this->getValue('addresses_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Addresses', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Addresses', array_values($link));
    }
  }

  public function saveFangroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['fangroups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Fangroups->getPrimaryKeys();
    $values = $this->getValue('fangroups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Fangroups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Fangroups', array_values($link));
    }
  }

}
