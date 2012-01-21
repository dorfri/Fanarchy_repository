<?php

/**
 * Mediavideo form base class.
 *
 * @method Mediavideo getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMediavideoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'url'             => new sfWidgetFormInputText(),
      'width'           => new sfWidgetFormInputText(),
      'height'          => new sfWidgetFormInputText(),
      'hovertext'       => new sfWidgetFormInputText(),
      'Exposuredata_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Exposuredata'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'url'             => new sfValidatorString(array('max_length' => 100)),
      'width'           => new sfValidatorInteger(),
      'height'          => new sfValidatorInteger(),
      'hovertext'       => new sfValidatorString(array('max_length' => 200)),
      'Exposuredata_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Exposuredata'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mediavideo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mediavideo';
  }

}
