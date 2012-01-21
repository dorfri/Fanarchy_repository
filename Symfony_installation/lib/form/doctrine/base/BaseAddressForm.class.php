<?php

/**
 * Address form base class.
 *
 * @method Address getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAddressForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'address1'      => new sfWidgetFormInputText(),
      'address2'      => new sfWidgetFormInputText(),
      'postcode'      => new sfWidgetFormInputText(),
      'City_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => false)),
      'segments_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Segment')),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'address1'      => new sfValidatorString(array('max_length' => 50)),
      'address2'      => new sfValidatorString(array('max_length' => 50)),
      'postcode'      => new sfValidatorString(array('max_length' => 50)),
      'City_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'))),
      'segments_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Segment', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('address[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Address';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['segments_list']))
    {
      $this->setDefault('segments_list', $this->object->Segments->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveSegmentsList($con);

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

}
