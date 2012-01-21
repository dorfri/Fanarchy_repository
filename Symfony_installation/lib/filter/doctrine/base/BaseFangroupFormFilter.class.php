<?php

/**
 * Fangroup filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFangroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agerangestart'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agerangeend'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gender'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'homepage'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Team_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'Address_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'Mediapicture_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'segments_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Segment')),
      'site_users_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'agerangestart'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'agerangeend'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gender'          => new sfValidatorPass(array('required' => false)),
      'homepage'        => new sfValidatorPass(array('required' => false)),
      'Team_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'Address_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Address'), 'column' => 'id')),
      'Mediapicture_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediapicture'), 'column' => 'id')),
      'segments_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Segment', 'required' => false)),
      'site_users_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fangroup_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSegmentsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmSegment2fangroup MtmSegment2fangroup')
      ->andWhereIn('MtmSegment2fangroup.segment_id', $values)
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
      ->leftJoin($query->getRootAlias().'.MtmFangroup2siteusers MtmFangroup2siteusers')
      ->andWhereIn('MtmFangroup2siteusers.siteuser_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Fangroup';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'agerangestart'   => 'Number',
      'agerangeend'     => 'Number',
      'gender'          => 'Text',
      'homepage'        => 'Text',
      'Team_id'         => 'ForeignKey',
      'Address_id'      => 'ForeignKey',
      'Mediapicture_id' => 'ForeignKey',
      'segments_list'   => 'ManyKey',
      'site_users_list' => 'ManyKey',
    );
  }
}
