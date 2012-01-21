<?php

/**
 * MtmSiteusers2team form base class.
 *
 * @method MtmSiteusers2team getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMtmSiteusers2teamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'team_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => false)),
      'siteusers_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => false)),
      'joindate'       => new sfWidgetFormDateTime(),
      'expirationdate' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'team_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'))),
      'siteusers_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'))),
      'joindate'       => new sfValidatorDateTime(),
      'expirationdate' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('mtm_siteusers2team[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSiteusers2team';
  }

}
