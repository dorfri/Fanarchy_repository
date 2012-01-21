<?php

/**
 * MtmSiteusers2answervalue form base class.
 *
 * @method MtmSiteusers2answervalue getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMtmSiteusers2answervalueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => false)),
      'answervalue_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Answervalue'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'))),
      'answervalue_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Answervalue'))),
    ));

    $this->widgetSchema->setNameFormat('mtm_siteusers2answervalue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MtmSiteusers2answervalue';
  }

}
