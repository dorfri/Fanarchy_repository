<?php

/**
 * City filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Country_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => true)),
      'State_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'Country_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Country'), 'column' => 'id')),
      'State_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('State'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('city_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'City';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'Country_id' => 'ForeignKey',
      'State_id'   => 'ForeignKey',
    );
  }
}
