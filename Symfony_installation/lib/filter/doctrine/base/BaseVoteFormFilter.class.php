<?php

/**
 * Vote filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVoteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'summary'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'text'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activationstarttime'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'activationendtime'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'resultpublishplandate' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'isresultpublishd'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'creationtime'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'allowfreemium'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Mediapicture_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Team_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'Mediavideo_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediavideo'), 'add_empty' => true)),
      'Timezone_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Timezone'), 'add_empty' => true)),
      'Status_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'Segment_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'title'                 => new sfValidatorPass(array('required' => false)),
      'summary'               => new sfValidatorPass(array('required' => false)),
      'text'                  => new sfValidatorPass(array('required' => false)),
      'activationstarttime'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'activationendtime'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'resultpublishplandate' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'isresultpublishd'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'creationtime'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'allowfreemium'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Mediapicture_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediapicture'), 'column' => 'id')),
      'Team_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'Mediavideo_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediavideo'), 'column' => 'id')),
      'Timezone_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Timezone'), 'column' => 'id')),
      'Status_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Status'), 'column' => 'id')),
      'Segment_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Segment'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('vote_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vote';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'title'                 => 'Text',
      'summary'               => 'Text',
      'text'                  => 'Text',
      'activationstarttime'   => 'Date',
      'activationendtime'     => 'Date',
      'resultpublishplandate' => 'Date',
      'isresultpublishd'      => 'Number',
      'creationtime'          => 'Date',
      'allowfreemium'         => 'Number',
      'Mediapicture_id'       => 'ForeignKey',
      'Team_id'               => 'ForeignKey',
      'Mediavideo_id'         => 'ForeignKey',
      'Timezone_id'           => 'ForeignKey',
      'Status_id'             => 'ForeignKey',
      'Segment_id'            => 'ForeignKey',
    );
  }
}
