<?php

/**
 * City form base class.
 *
 * @method City getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'Country_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => false)),
      'State_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'Country_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Country'))),
      'State_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('city[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'City';
  }

}
