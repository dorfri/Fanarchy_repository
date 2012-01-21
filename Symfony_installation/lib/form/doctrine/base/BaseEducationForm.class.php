<?php

/**
 * Education form base class.
 *
 * @method Education getObject() Returns the current form's model object
 *
 * @package    PhpProject2
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEducationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'timeperiodstart' => new sfWidgetFormDateTime(),
      'timeperiodend'   => new sfWidgetFormDateTime(),
      'concentrations'  => new sfWidgetFormInputText(),
      'attendedfor'     => new sfWidgetFormInputText(),
      'site_users_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'timeperiodstart' => new sfValidatorDateTime(),
      'timeperiodend'   => new sfValidatorDateTime(),
      'concentrations'  => new sfValidatorString(array('max_length' => 255)),
      'attendedfor'     => new sfValidatorString(array('max_length' => 25)),
      'site_users_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('education[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Education';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['site_users_list']))
    {
      $this->setDefault('site_users_list', $this->object->SiteUsers->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveSiteUsersList($con);

    parent::doSave($con);
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
