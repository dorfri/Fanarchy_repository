<?php

/**
 * Answer filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAnswerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Mediapicture_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Mediavideo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediavideo'), 'add_empty' => true)),
      'Vote_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
      'Question_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => true)),
      'answer_values_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue')),
    ));

    $this->setValidators(array(
      'text'               => new sfValidatorPass(array('required' => false)),
      'Mediapicture_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediapicture'), 'column' => 'id')),
      'Mediavideo_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediavideo'), 'column' => 'id')),
      'Vote_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vote'), 'column' => 'id')),
      'Question_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Question'), 'column' => 'id')),
      'answer_values_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addAnswerValuesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.MtmAnswer2answervalue MtmAnswer2answervalue')
      ->andWhereIn('MtmAnswer2answervalue.answervalue_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Answer';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'text'               => 'Text',
      'Mediapicture_id'    => 'ForeignKey',
      'Mediavideo_id'      => 'ForeignKey',
      'Vote_id'            => 'ForeignKey',
      'Question_id'        => 'ForeignKey',
      'answer_values_list' => 'ManyKey',
    );
  }
}
