<?php

/**
 * Siteusers filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSiteusersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'firstname'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dateofbirth'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'password'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sexorientation'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relationshipstatus' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'relationshipwith'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anniversarydate'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'religion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'politicalview'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'createddate'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'isactive'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Address_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'Priviclass_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Priviclass'), 'add_empty' => true)),
      'Profilepicture_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Education_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'Gender_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'add_empty' => true)),
      'Language_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Language'), 'add_empty' => true)),
      'answer_values_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue')),
      'educations_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Education')),
      'fangroups_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup')),
      'teams_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Team')),
    ));

    $this->setValidators(array(
      'firstname'          => new sfValidatorPass(array('required' => false)),
      'lastname'           => new sfValidatorPass(array('required' => false)),
      'email'              => new sfValidatorPass(array('required' => false)),
      'dateofbirth'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'password'           => new sfValidatorPass(array('required' => false)),
      'sexorientation'     => new sfValidatorPass(array('required' => false)),
      'relationshipstatus' => new sfValidatorPass(array('required' => false)),
      'relationshipwith'   => new sfValidatorPass(array('required' => false)),
      'anniversarydate'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'religion'           => new sfValidatorPass(array('required' => false)),
      'politicalview'      => new sfValidatorPass(array('required' => false)),
      'createddate'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'isactive'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Address_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Address'), 'column' => 'id')),
      'Priviclass_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Priviclass'), 'column' => 'id')),
      'Profilepicture_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediapicture'), 'column' => 'id')),
      'Education_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Education'), 'column' => 'id')),
      'Gender_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gender'), 'column' => 'id')),
      'Language_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Language'), 'column' => 'id')),
      'answer_values_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue', 'required' => false)),
      'educations_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Education', 'required' => false)),
      'fangroups_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup', 'required' => false)),
      'teams_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Team', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('siteusers_filters[%s]');

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
      ->leftJoin($query->getRootAlias().'.MtmSiteusers2answervalue MtmSiteusers2answervalue')
      ->andWhereIn('MtmSiteusers2answervalue.answervalue_id', $values)
    ;
  }

  public function addEducationsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmSiteusers2education MtmSiteusers2education')
      ->andWhereIn('MtmSiteusers2education.education_id', $values)
    ;
  }

  public function addFangroupsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmFangroup2siteusers MtmFangroup2siteusers')
      ->andWhereIn('MtmFangroup2siteusers.fangroup_id', $values)
    ;
  }

  public function addTeamsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmSiteusers2team MtmSiteusers2team')
      ->andWhereIn('MtmSiteusers2team.team_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Siteusers';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'firstname'          => 'Text',
      'lastname'           => 'Text',
      'email'              => 'Text',
      'dateofbirth'        => 'Date',
      'password'           => 'Text',
      'sexorientation'     => 'Text',
      'relationshipstatus' => 'Text',
      'relationshipwith'   => 'Text',
      'anniversarydate'    => 'Date',
      'religion'           => 'Text',
      'politicalview'      => 'Text',
      'createddate'        => 'Date',
      'isactive'           => 'Number',
      'Address_id'         => 'ForeignKey',
      'Priviclass_id'      => 'ForeignKey',
      'Profilepicture_id'  => 'ForeignKey',
      'Education_id'       => 'ForeignKey',
      'Gender_id'          => 'ForeignKey',
      'Language_id'        => 'ForeignKey',
      'answer_values_list' => 'ManyKey',
      'educations_list'    => 'ManyKey',
      'fangroups_list'     => 'ManyKey',
      'teams_list'         => 'ManyKey',
    );
  }
}
