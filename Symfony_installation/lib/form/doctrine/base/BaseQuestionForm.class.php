<?php

/**
 * Question form base class.
 *
 * @method Question getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQuestionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'text'            => new sfWidgetFormInputText(),
      'sequence'        => new sfWidgetFormInputText(),
      'maxanswers'      => new sfWidgetFormInputText(),
      'Vote_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
      'Questiontype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Questiontype'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text'            => new sfValidatorString(array('max_length' => 255)),
      'sequence'        => new sfValidatorInteger(),
      'maxanswers'      => new sfValidatorInteger(),
      'Vote_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'required' => false)),
      'Questiontype_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Questiontype'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }

}
