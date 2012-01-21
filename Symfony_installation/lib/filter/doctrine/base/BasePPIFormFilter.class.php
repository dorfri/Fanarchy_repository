<?php

/**
 * PPI filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePPIFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'promotioncode' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prodprice'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'startdate'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'enddate'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updateddt'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'description'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prodduration'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'autorenew'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'isactive'      => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1))),
    ));

    $this->setValidators(array(
      'code'          => new sfValidatorPass(array('required' => false)),
      'promotioncode' => new sfValidatorPass(array('required' => false)),
      'name'          => new sfValidatorPass(array('required' => false)),
      'prodprice'     => new sfValidatorPass(array('required' => false)),
      'startdate'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'enddate'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'updateddt'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'description'   => new sfValidatorPass(array('required' => false)),
      'prodduration'  => new sfValidatorPass(array('required' => false)),
      'autorenew'     => new sfValidatorPass(array('required' => false)),
      'isactive'      => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1))),
    ));

    $this->widgetSchema->setNameFormat('ppi_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PPI';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'code'          => 'Text',
      'promotioncode' => 'Text',
      'name'          => 'Text',
      'prodprice'     => 'Text',
      'startdate'     => 'Date',
      'enddate'       => 'Date',
      'updateddt'     => 'Date',
      'description'   => 'Text',
      'prodduration'  => 'Text',
      'autorenew'     => 'Text',
      'isactive'      => 'Enum',
    );
  }
}
