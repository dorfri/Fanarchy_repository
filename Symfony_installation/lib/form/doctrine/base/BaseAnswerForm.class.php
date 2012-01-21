<?php

/**
 * Answer form base class.
 *
 * @method Answer getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAnswerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'text'               => new sfWidgetFormInputText(),
      'Mediapicture_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Mediavideo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediavideo'), 'add_empty' => true)),
      'Vote_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
      'Question_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => true)),
      'answer_values_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue')),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text'               => new sfValidatorString(array('max_length' => 100)),
      'Mediapicture_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'required' => false)),
      'Mediavideo_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediavideo'), 'required' => false)),
      'Vote_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'required' => false)),
      'Question_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'required' => false)),
      'answer_values_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answer';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['answer_values_list']))
    {
      $this->setDefault('answer_values_list', $this->object->AnswerValues->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAnswerValuesList($con);

    parent::doSave($con);
  }

  public function saveAnswerValuesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['answer_values_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->AnswerValues->getPrimaryKeys();
    $values = $this->getValue('answer_values_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('AnswerValues', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('AnswerValues', array_values($link));
    }
  }

}
