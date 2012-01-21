<?php

/**
 * Answervalue filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAnswervalueFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'valuenumeric'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valueyesno'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valuecomment'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chosenottovotereason' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Voteinstance_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Voteinstance'), 'add_empty' => true)),
      'answers_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Answer')),
      'site_users_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'valuenumeric'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'valueyesno'           => new sfValidatorPass(array('required' => false)),
      'valuecomment'         => new sfValidatorPass(array('required' => false)),
      'chosenottovotereason' => new sfValidatorPass(array('required' => false)),
      'Voteinstance_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Voteinstance'), 'column' => 'id')),
      'answers_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Answer', 'required' => false)),
      'site_users_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answervalue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addAnswersListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('MtmAnswer2answervalue.answer_id', $values)
    ;
  }

  public function addSiteUsersListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmSiteusers2answervalue MtmSiteusers2answervalue')
      ->andWhereIn('MtmSiteusers2answervalue.user_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Answervalue';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'valuenumeric'         => 'Number',
      'valueyesno'           => 'Text',
      'valuecomment'         => 'Text',
      'chosenottovotereason' => 'Text',
      'Voteinstance_id'      => 'ForeignKey',
      'answers_list'         => 'ManyKey',
      'site_users_list'      => 'ManyKey',
    );
  }
}
