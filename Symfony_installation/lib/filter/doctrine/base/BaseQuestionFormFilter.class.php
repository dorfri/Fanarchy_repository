<?php

/**
 * Question filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuestionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sequence'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maxanswers'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Vote_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
      'Questiontype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Questiontype'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'text'            => new sfValidatorPass(array('required' => false)),
      'sequence'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'maxanswers'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Vote_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vote'), 'column' => 'id')),
      'Questiontype_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Questiontype'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'text'            => 'Text',
      'sequence'        => 'Number',
      'maxanswers'      => 'Number',
      'Vote_id'         => 'ForeignKey',
      'Questiontype_id' => 'ForeignKey',
    );
  }
}
