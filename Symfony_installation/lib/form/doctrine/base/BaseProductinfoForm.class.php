<?php

/**
 * Productinfo form base class.
 *
 * @method Productinfo getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductinfoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'code'               => new sfWidgetFormInputText(),
      'name'               => new sfWidgetFormInputText(),
      'updateddt'          => new sfWidgetFormDateTime(),
      'description'        => new sfWidgetFormTextarea(),
      'prodduration'       => new sfWidgetFormInputText(),
      'prodtype'           => new sfWidgetFormInputText(),
      'promotioncode'      => new sfWidgetFormInputText(),
      'proddurationunits'  => new sfWidgetFormInputText(),
      'prodnumberusages'   => new sfWidgetFormInputText(),
      'mustbeloggedin'     => new sfWidgetFormInputText(),
      'purchasecaption'    => new sfWidgetFormInputText(),
      'showexpirationdate' => new sfWidgetFormInputText(),
      'billingperiod'      => new sfWidgetFormInputText(),
      'freeperiod'         => new sfWidgetFormInputText(),
      'freeperiodunit'     => new sfWidgetFormInputText(),
      'isarbproduct'       => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1))),
      'billingperiodunit'  => new sfWidgetFormInputText(),
      'emailtosite'        => new sfWidgetFormChoice(array('choices' => array(0 => 0, 1 => 1))),
      'prodcurrency'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updateddt'          => new sfValidatorDateTime(),
      'description'        => new sfValidatorString(),
      'prodduration'       => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'prodtype'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'promotioncode'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'proddurationunits'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'prodnumberusages'   => new sfValidatorInteger(array('required' => false)),
      'mustbeloggedin'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'purchasecaption'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'showexpirationdate' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'billingperiod'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'freeperiod'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'freeperiodunit'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'isarbproduct'       => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1), 'required' => false)),
      'billingperiodunit'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'emailtosite'        => new sfValidatorChoice(array('choices' => array(0 => 0, 1 => 1), 'required' => false)),
      'prodcurrency'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Productinfo', 'column' => array('code')))
    );

    $this->widgetSchema->setNameFormat('productinfo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Productinfo';
  }

}
