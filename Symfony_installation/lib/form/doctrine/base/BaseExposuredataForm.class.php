<?php

/**
 * Exposuredata form base class.
 *
 * @method Exposuredata getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExposuredataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'totalexposures'    => new sfWidgetFormInputText(),
      'firstexposuredate' => new sfWidgetFormDateTime(),
      'lastexposuredate'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'totalexposures'    => new sfValidatorInteger(),
      'firstexposuredate' => new sfValidatorDateTime(),
      'lastexposuredate'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('exposuredata[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Exposuredata';
  }

}
