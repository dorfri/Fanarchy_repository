<?php

/**
 * Address filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAddressFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'address1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'postcode'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'City_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'segments_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Segment')),
    ));

    $this->setValidators(array(
      'address1'      => new sfValidatorPass(array('required' => false)),
      'address2'      => new sfValidatorPass(array('required' => false)),
      'postcode'      => new sfValidatorPass(array('required' => false)),
      'City_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id')),
      'segments_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Segment', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('address_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSegmentsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('MtmSegment2address.segment_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Address';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'address1'      => 'Text',
      'address2'      => 'Text',
      'postcode'      => 'Text',
      'City_id'       => 'ForeignKey',
      'segments_list' => 'ManyKey',
    );
  }
}
