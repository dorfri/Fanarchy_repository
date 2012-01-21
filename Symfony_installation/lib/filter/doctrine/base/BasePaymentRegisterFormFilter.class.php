<?php

/**
 * PaymentRegister filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePaymentRegisterFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'createdatetime' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ppi_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PPI'), 'add_empty' => true)),
      'Siteusers_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Siteusers'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'createdatetime' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ppi_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PPI'), 'column' => 'id')),
      'Siteusers_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Siteusers'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('payment_register_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PaymentRegister';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'createdatetime' => 'Date',
      'ppi_id'         => 'ForeignKey',
      'Siteusers_id'   => 'ForeignKey',
    );
  }
}
