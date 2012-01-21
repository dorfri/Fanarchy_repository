<?php

/**
 * Teamsiteusersaddnlinfo filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamsiteusersaddnlinfoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'jobtitle'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phonenumber'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mobile'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Siteusers_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => true)),
      'Priviclass_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Priviclass'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'jobtitle'      => new sfValidatorPass(array('required' => false)),
      'phonenumber'   => new sfValidatorPass(array('required' => false)),
      'fax'           => new sfValidatorPass(array('required' => false)),
      'mobile'        => new sfValidatorPass(array('required' => false)),
      'Siteusers_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Siteusers'), 'column' => 'id')),
      'Priviclass_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Priviclass'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('teamsiteusersaddnlinfo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Teamsiteusersaddnlinfo';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'jobtitle'      => 'Text',
      'phonenumber'   => 'Text',
      'fax'           => 'Text',
      'mobile'        => 'Text',
      'Siteusers_id'  => 'ForeignKey',
      'Priviclass_id' => 'ForeignKey',
    );
  }
}
