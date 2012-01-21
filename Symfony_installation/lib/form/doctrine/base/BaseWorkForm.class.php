<?php

/**
 * Work form base class.
 *
 * @method Work getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWorkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'position'    => new sfWidgetFormInputText(),
      'citytown'    => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'timeperiod'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'position'    => new sfValidatorString(array('max_length' => 255)),
      'citytown'    => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorString(array('max_length' => 255)),
      'timeperiod'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('work[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Work';
  }

}
