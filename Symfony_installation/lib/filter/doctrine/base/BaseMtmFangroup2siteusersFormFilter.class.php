<?php

/**
 * MtmFangroup2siteusers filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMtmFangroup2siteusersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fangroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Fangroup'), 'add_empty' => true)),
      'siteuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fangroup_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Fangroup'), 'column' => 'id')),
      'siteuser_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Siteusers'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mtm_fangroup2siteusers_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmFangroup2siteusers';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'fangroup_id' => 'ForeignKey',
      'siteuser_id' => 'ForeignKey',
    );
  }
}
