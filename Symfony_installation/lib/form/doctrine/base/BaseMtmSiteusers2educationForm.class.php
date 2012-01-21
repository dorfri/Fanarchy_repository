<?php

/**
 * MtmSiteusers2education form base class.
 *
 * @method MtmSiteusers2education getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMtmSiteusers2educationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'siteusers_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => false)),
      'education_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'siteusers_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'))),
      'education_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Education'))),
    ));

    $this->widgetSchema->setNameFormat('mtm_siteusers2education[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSiteusers2education';
  }

}
