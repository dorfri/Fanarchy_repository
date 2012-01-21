<?php

/**
 * MtmAnswer2answervalue filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMtmAnswer2answervalueFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'answer_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Answer'), 'add_empty' => true)),
      'answervalue_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Answervalue'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'answer_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Answer'), 'column' => 'id')),
      'answervalue_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Answervalue'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mtm_answer2answervalue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmAnswer2answervalue';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'answer_id'      => 'ForeignKey',
      'answervalue_id' => 'ForeignKey',
    );
  }
}
