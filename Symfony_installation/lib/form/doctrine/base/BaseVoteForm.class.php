<?php

/**
 * Vote form base class.
 *
 * @method Vote getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVoteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'title'                 => new sfWidgetFormInputText(),
      'summary'               => new sfWidgetFormInputText(),
      'text'                  => new sfWidgetFormTextarea(),
      'activationstarttime'   => new sfWidgetFormDateTime(),
      'activationendtime'     => new sfWidgetFormDateTime(),
      'resultpublishplandate' => new sfWidgetFormDateTime(),
      'isresultpublishd'      => new sfWidgetFormInputText(),
      'creationtime'          => new sfWidgetFormDateTime(),
      'allowfreemium'         => new sfWidgetFormInputText(),
      'Mediapicture_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Team_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'Mediavideo_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediavideo'), 'add_empty' => true)),
      'Timezone_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Timezone'), 'add_empty' => true)),
      'Status_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'Segment_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'                 => new sfValidatorString(array('max_length' => 40)),
      'summary'               => new sfValidatorString(array('max_length' => 250)),
      'text'                  => new sfValidatorString(),
      'activationstarttime'   => new sfValidatorDateTime(),
      'activationendtime'     => new sfValidatorDateTime(),
      'resultpublishplandate' => new sfValidatorDateTime(),
      'isresultpublishd'      => new sfValidatorInteger(),
      'creationtime'          => new sfValidatorDateTime(),
      'allowfreemium'         => new sfValidatorInteger(),
      'Mediapicture_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'required' => false)),
      'Team_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'Mediavideo_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediavideo'), 'required' => false)),
      'Timezone_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Timezone'), 'required' => false)),
      'Status_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'required' => false)),
      'Segment_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Segment'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vote[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vote';
  }

}
