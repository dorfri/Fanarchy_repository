<?php

/**
 * Voteinstance form base class.
 *
 * @method Voteinstance getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVoteinstanceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'participation'  => new sfWidgetFormInputText(),
      'totalpageviews' => new sfWidgetFormInputText(),
      'totalshared'    => new sfWidgetFormInputText(),
      'totalcomments'  => new sfWidgetFormInputText(),
      'creationtime'   => new sfWidgetFormDateTime(),
      'Vote_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'participation'  => new sfValidatorInteger(),
      'totalpageviews' => new sfValidatorInteger(),
      'totalshared'    => new sfValidatorInteger(),
      'totalcomments'  => new sfValidatorInteger(),
      'creationtime'   => new sfValidatorDateTime(),
      'Vote_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('voteinstance[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Voteinstance';
  }

}
