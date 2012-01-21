<?php

/**
 * Voteinstance filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVoteinstanceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'participation'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totalpageviews' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totalshared'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'totalcomments'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'creationtime'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'Vote_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'participation'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalpageviews' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalshared'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalcomments'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'creationtime'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Vote_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vote'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('voteinstance_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Voteinstance';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'participation'  => 'Number',
      'totalpageviews' => 'Number',
      'totalshared'    => 'Number',
      'totalcomments'  => 'Number',
      'creationtime'   => 'Date',
      'Vote_id'        => 'ForeignKey',
    );
  }
}
