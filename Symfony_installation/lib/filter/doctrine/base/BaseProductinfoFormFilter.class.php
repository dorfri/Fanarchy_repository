<?php

/**
 * Productinfo filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductinfoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'updateddt'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'description'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prodduration'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prodtype'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'promotioncode'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'proddurationunits'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prodnumberusages'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mustbeloggedin'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'purchasecaption'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'showexpirationdate' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'billingperiod'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'freeperiod'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'freeperiodunit'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'isarbproduct'       => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1))),
      'billingperiodunit'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'emailtosite'        => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1))),
      'prodcurrency'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'code'               => new sfValidatorPass(array('required' => false)),
      'name'               => new sfValidatorPass(array('required' => false)),
      'updateddt'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'description'        => new sfValidatorPass(array('required' => false)),
      'prodduration'       => new sfValidatorPass(array('required' => false)),
      'prodtype'           => new sfValidatorPass(array('required' => false)),
      'promotioncode'      => new sfValidatorPass(array('required' => false)),
      'proddurationunits'  => new sfValidatorPass(array('required' => false)),
      'prodnumberusages'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mustbeloggedin'     => new sfValidatorPass(array('required' => false)),
      'purchasecaption'    => new sfValidatorPass(array('required' => false)),
      'showexpirationdate' => new sfValidatorPass(array('required' => false)),
      'billingperiod'      => new sfValidatorPass(array('required' => false)),
      'freeperiod'         => new sfValidatorPass(array('required' => false)),
      'freeperiodunit'     => new sfValidatorPass(array('required' => false)),
      'isarbproduct'       => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1))),
      'billingperiodunit'  => new sfValidatorPass(array('required' => false)),
      'emailtosite'        => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1))),
      'prodcurrency'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('productinfo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Productinfo';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'code'               => 'Text',
      'name'               => 'Text',
      'updateddt'          => 'Date',
      'description'        => 'Text',
      'prodduration'       => 'Text',
      'prodtype'           => 'Text',
      'promotioncode'      => 'Text',
      'proddurationunits'  => 'Text',
      'prodnumberusages'   => 'Number',
      'mustbeloggedin'     => 'Text',
      'purchasecaption'    => 'Text',
      'showexpirationdate' => 'Text',
      'billingperiod'      => 'Text',
      'freeperiod'         => 'Text',
      'freeperiodunit'     => 'Text',
      'isarbproduct'       => 'Enum',
      'billingperiodunit'  => 'Text',
      'emailtosite'        => 'Enum',
      'prodcurrency'       => 'Text',
    );
  }
}
