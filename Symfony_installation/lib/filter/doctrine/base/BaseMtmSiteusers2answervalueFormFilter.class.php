<?php

/**
 * MtmSiteusers2answervalue filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMtmSiteusers2answervalueFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => true)),
      'answervalue_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Answervalue'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Siteusers'), 'column' => 'id')),
      'answervalue_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Answervalue'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mtm_siteusers2answervalue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSiteusers2answervalue';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'user_id'        => 'ForeignKey',
      'answervalue_id' => 'ForeignKey',
    );
  }
}
