<?php

/**
 * Questiontype form base class.
 *
 * @method Questiontype getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQuestiontypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormInputText(),
      'minanswers'       => new sfWidgetFormInputText(),
      'maxanswers'       => new sfWidgetFormInputText(),
      'htmlpresentation' => new sfWidgetFormInputText(),
      'isboolean'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'minanswers'       => new sfValidatorInteger(),
      'maxanswers'       => new sfValidatorInteger(),
      'htmlpresentation' => new sfValidatorString(array('max_length' => 250)),
      'isboolean'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('questiontype[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Questiontype';
  }

}
