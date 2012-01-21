<?php

/**
 * Siteusers form base class.
 *
 * @method Siteusers getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSiteusersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'firstname'          => new sfWidgetFormInputText(),
      'lastname'           => new sfWidgetFormInputText(),
      'email'              => new sfWidgetFormInputText(),
      'dateofbirth'        => new sfWidgetFormDateTime(),
      'password'           => new sfWidgetFormInputText(),
      'sexorientation'     => new sfWidgetFormInputText(),
      'relationshipstatus' => new sfWidgetFormInputText(),
      'relationshipwith'   => new sfWidgetFormInputText(),
      'anniversarydate'    => new sfWidgetFormDateTime(),
      'religion'           => new sfWidgetFormInputText(),
      'politicalview'      => new sfWidgetFormInputText(),
      'createddate'        => new sfWidgetFormDateTime(),
      'isactive'           => new sfWidgetFormInputText(),
      'Address_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'Priviclass_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Priviclass'), 'add_empty' => true)),
      'Profilepicture_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Education_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'Gender_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'add_empty' => true)),
      'Language_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Language'), 'add_empty' => true)),
      'answer_values_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue')),
      'educations_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Education')),
      'fangroups_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup')),
      'teams_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Team')),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'firstname'          => new sfValidatorString(array('max_length' => 255)),
      'lastname'           => new sfValidatorString(array('max_length' => 255)),
      'email'              => new sfValidatorString(array('max_length' => 255)),
      'dateofbirth'        => new sfValidatorDateTime(),
      'password'           => new sfValidatorString(array('max_length' => 50)),
      'sexorientation'     => new sfValidatorString(array('max_length' => 10)),
      'relationshipstatus' => new sfValidatorString(array('max_length' => 30)),
      'relationshipwith'   => new sfValidatorString(array('max_length' => 50)),
      'anniversarydate'    => new sfValidatorDateTime(),
      'religion'           => new sfValidatorString(array('max_length' => 255)),
      'politicalview'      => new sfValidatorString(array('max_length' => 255)),
      'createddate'        => new sfValidatorDateTime(),
      'isactive'           => new sfValidatorInteger(),
      'Address_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'required' => false)),
      'Priviclass_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Priviclass'), 'required' => false)),
      'Profilepicture_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'required' => false)),
      'Education_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'required' => false)),
      'Gender_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'required' => false)),
      'Language_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Language'), 'required' => false)),
      'answer_values_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Answervalue', 'required' => false)),
      'educations_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Education', 'required' => false)),
      'fangroups_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup', 'required' => false)),
      'teams_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Team', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('siteusers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Siteusers';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['answer_values_list']))
    {
      $this->setDefault('answer_values_list', $this->object->AnswerValues->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['educations_list']))
    {
      $this->setDefault('educations_list', $this->object->Educations->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['fangroups_list']))
    {
      $this->setDefault('fangroups_list', $this->object->Fangroups->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['teams_list']))
    {
      $this->setDefault('teams_list', $this->object->Teams->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAnswerValuesList($con);
    $this->saveEducationsList($con);
    $this->saveFangroupsList($con);
    $this->saveTeamsList($con);

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

  public function saveEducationsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['educations_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Educations->getPrimaryKeys();
    $values = $this->getValue('educations_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Educations', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Educations', array_values($link));
    }
  }

  public function saveFangroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['fangroups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Fangroups->getPrimaryKeys();
    $values = $this->getValue('fangroups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Fangroups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Fangroups', array_values($link));
    }
  }

  public function saveTeamsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['teams_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Teams->getPrimaryKeys();
    $values = $this->getValue('teams_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Teams', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Teams', array_values($link));
    }
  }

}
