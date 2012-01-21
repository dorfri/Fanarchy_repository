<?php

/**
 * Answervalue form base class.
 *
 * @method Answervalue getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAnswervalueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'valuenumeric'         => new sfWidgetFormInputText(),
      'valueyesno'           => new sfWidgetFormInputText(),
      'valuecomment'         => new sfWidgetFormInputText(),
      'chosenottovotereason' => new sfWidgetFormInputText(),
      'Voteinstance_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Voteinstance'), 'add_empty' => true)),
      'answers_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Answer')),
      'site_users_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'valuenumeric'         => new sfValidatorInteger(),
      'valueyesno'           => new sfValidatorString(array('max_length' => 10)),
      'valuecomment'         => new sfValidatorString(array('max_length' => 255)),
      'chosenottovotereason' => new sfValidatorString(array('max_length' => 20)),
      'Voteinstance_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Voteinstance'), 'required' => false)),
      'answers_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Answer', 'required' => false)),
      'site_users_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('answervalue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Answervalue';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['answers_list']))
    {
      $this->setDefault('answers_list', $this->object->Answers->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['site_users_list']))
    {
      $this->setDefault('site_users_list', $this->object->SiteUsers->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAnswersList($con);
    $this->saveSiteUsersList($con);

    parent::doSave($con);
  }

  public function saveAnswersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['answers_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Answers->getPrimaryKeys();
    $values = $this->getValue('answers_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Answers', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Answers', array_values($link));
    }
  }

  public function saveSiteUsersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['site_users_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SiteUsers->getPrimaryKeys();
    $values = $this->getValue('site_users_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SiteUsers', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SiteUsers', array_values($link));
    }
  }

}
