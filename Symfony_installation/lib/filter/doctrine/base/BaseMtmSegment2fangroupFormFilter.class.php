<?php

/**
 * MtmSegment2fangroup filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMtmSegment2fangroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'segment_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'), 'add_empty' => true)),
      'fangroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Fangroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'segment_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Segment'), 'column' => 'id')),
      'fangroup_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Fangroup'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mtm_segment2fangroup_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSegment2fangroup';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'segment_id'  => 'ForeignKey',
      'fangroup_id' => 'ForeignKey',
    );
  }
}
