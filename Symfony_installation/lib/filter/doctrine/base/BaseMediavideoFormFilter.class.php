<?php

/**
 * Mediavideo filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMediavideoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'width'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'height'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hovertext'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Exposuredata_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Exposuredata'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'url'             => new sfValidatorPass(array('required' => false)),
      'width'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'height'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hovertext'       => new sfValidatorPass(array('required' => false)),
      'Exposuredata_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Exposuredata'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mediavideo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mediavideo';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'url'             => 'Text',
      'width'           => 'Number',
      'height'          => 'Number',
      'hovertext'       => 'Text',
      'Exposuredata_id' => 'ForeignKey',
    );
  }
}
