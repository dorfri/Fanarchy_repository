<?php

/**
 * Teamsiteusersaddnlinfo form base class.
 *
 * @method Teamsiteusersaddnlinfo getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamsiteusersaddnlinfoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'jobtitle'      => new sfWidgetFormInputText(),
      'phonenumber'   => new sfWidgetFormInputText(),
      'fax'           => new sfWidgetFormInputText(),
      'mobile'        => new sfWidgetFormInputText(),
      'Siteusers_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => true)),
      'Priviclass_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Priviclass'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'jobtitle'      => new sfValidatorString(array('max_length' => 255)),
      'phonenumber'   => new sfValidatorString(array('max_length' => 20)),
      'fax'           => new sfValidatorString(array('max_length' => 20)),
      'mobile'        => new sfValidatorString(array('max_length' => 20)),
      'Siteusers_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'required' => false)),
      'Priviclass_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Priviclass'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('teamsiteusersaddnlinfo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Teamsiteusersaddnlinfo';
  }

}
