<?php

/**
 * Segment filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSegmentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agerangestart'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agerangeend'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estimatedreach' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Gender_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'add_empty' => true)),
      'addresses_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Address')),
      'fangroups_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup')),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'agerangestart'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'agerangeend'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estimatedreach' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Gender_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gender'), 'column' => 'id')),
      'addresses_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Address', 'required' => false)),
      'fangroups_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Fangroup', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('segment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addAddressesListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmSegment2address MtmSegment2address')
      ->andWhereIn('MtmSegment2address.address_id', $values)
    ;
  }

  public function addFangroupsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.MtmSegment2fangroup MtmSegment2fangroup')
      ->andWhereIn('MtmSegment2fangroup.fangroup_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Segment';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'name'           => 'Text',
      'agerangestart'  => 'Number',
      'agerangeend'    => 'Number',
      'estimatedreach' => 'Number',
      'Gender_id'      => 'ForeignKey',
      'addresses_list' => 'ManyKey',
      'fangroups_list' => 'ManyKey',
    );
  }
}
