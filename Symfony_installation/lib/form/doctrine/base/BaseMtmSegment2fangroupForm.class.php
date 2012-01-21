<?php

/**
 * MtmSegment2fangroup form base class.
 *
 * @method MtmSegment2fangroup getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMtmSegment2fangroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'segment_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'), 'add_empty' => false)),
      'fangroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Fangroup'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'segment_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'))),
      'fangroup_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Fangroup'))),
    ));

    $this->widgetSchema->setNameFormat('mtm_segment2fangroup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSegment2fangroup';
  }

}
