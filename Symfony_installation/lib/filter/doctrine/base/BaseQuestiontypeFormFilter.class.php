<?php

/**
 * Questiontype filter form base class.
 *
 * @package    PhpProject2
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuestiontypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'             => new sfWidgetFormFilterInput(),
      'minanswers'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maxanswers'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'htmlpresentation' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'isboolean'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'             => new sfValidatorPass(array('required' => false)),
      'minanswers'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'maxanswers'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'htmlpresentation' => new sfValidatorPass(array('required' => false)),
      'isboolean'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('questiontype_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Questiontype';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'name'             => 'Text',
      'minanswers'       => 'Number',
      'maxanswers'       => 'Number',
      'htmlpresentation' => 'Text',
      'isboolean'        => 'Number',
    );
  }
}
