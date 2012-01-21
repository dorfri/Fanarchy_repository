<?php

/**
 * Team filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'websiteurl'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stadiumname'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phonenumber'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'createddate'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'Sporttype_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sporttype'), 'add_empty' => true)),
      'League_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('League'), 'add_empty' => true)),
      'Mediapicture_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mediapicture'), 'add_empty' => true)),
      'Homeaddress_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'site_users_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers')),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'websiteurl'      => new sfValidatorPass(array('required' => false)),
      'stadiumname'     => new sfValidatorPass(array('required' => false)),
      'phonenumber'     => new sfValidatorPass(array('required' => false)),
      'fax'             => new sfValidatorPass(array('required' => false)),
      'createddate'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'Sporttype_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sporttype'), 'column' => 'id')),
      'League_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('League'), 'column' => 'id')),
      'Mediapicture_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mediapicture'), 'column' => 'id')),
      'Homeaddress_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Address'), 'column' => 'id')),
      'site_users_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Siteusers', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('team_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSiteUsersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.MtmSiteusers2team MtmSiteusers2team')
      ->andWhereIn('MtmSiteusers2team.siteusers_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Team';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'websiteurl'      => 'Text',
      'stadiumname'     => 'Text',
      'phonenumber'     => 'Text',
      'fax'             => 'Text',
      'createddate'     => 'Date',
      'Sporttype_id'    => 'ForeignKey',
      'League_id'       => 'ForeignKey',
      'Mediapicture_id' => 'ForeignKey',
      'Homeaddress_id'  => 'ForeignKey',
      'site_users_list' => 'ManyKey',
    );
  }
}
