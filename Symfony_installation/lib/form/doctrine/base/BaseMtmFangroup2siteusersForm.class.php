<?php

/**
 * MtmFangroup2siteusers form base class.
 *
 * @method MtmFangroup2siteusers getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMtmFangroup2siteusersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'fangroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Fangroup'), 'add_empty' => false)),
      'siteuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fangroup_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Fangroup'))),
      'siteuser_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'))),
    ));

    $this->widgetSchema->setNameFormat('mtm_fangroup2siteusers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmFangroup2siteusers';
  }

}
