<?php

/**
 * MtmSegment2address filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMtmSegment2addressFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'segment_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'), 'add_empty' => true)),
      'address_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'segment_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Segment'), 'column' => 'id')),
      'address_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Address'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mtm_segment2address_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSegment2address';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'segment_id' => 'ForeignKey',
      'address_id' => 'ForeignKey',
    );
  }
}
