<?php

/**
 * PPI form base class.
 *
 * @method PPI getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePPIForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'code'          => new sfWidgetFormInputText(),
      'promotioncode' => new sfWidgetFormInputText(),
      'name'          => new sfWidgetFormInputText(),
      'prodprice'     => new sfWidgetFormInputText(),
      'startdate'     => new sfWidgetFormDate(),
      'enddate'       => new sfWidgetFormDate(),
      'updateddt'     => new sfWidgetFormDateTime(),
      'description'   => new sfWidgetFormTextarea(),
      'prodduration'  => new sfWidgetFormInputText(),
      'autorenew'     => new sfWidgetFormInputText(),
      'isactive'      => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1))),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promotioncode' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'prodprice'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'startdate'     => new sfValidatorDate(),
      'enddate'       => new sfValidatorDate(),
      'updateddt'     => new sfValidatorDateTime(),
      'description'   => new sfValidatorString(),
      'prodduration'  => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'autorenew'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'isactive'      => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ppi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PPI';
  }

}
