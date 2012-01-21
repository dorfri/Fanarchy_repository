<?php

/**
 * MtmSiteusers2education filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMtmSiteusers2educationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'siteusers_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => true)),
      'education_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'siteusers_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Siteusers'), 'column' => 'id')),
      'education_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Education'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mtm_siteusers2education_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSiteusers2education';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'siteusers_id' => 'ForeignKey',
      'education_id' => 'ForeignKey',
    );
  }
}
