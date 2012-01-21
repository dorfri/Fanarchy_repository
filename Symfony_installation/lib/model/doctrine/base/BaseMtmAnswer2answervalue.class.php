<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MtmAnswer2answervalue', 'doctrine');

/**
 * BaseMtmAnswer2answervalue
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $answer_id
 * @property integer $answervalue_id
 * @property Answer $Answer
 * @property Answervalue $Answervalue
 * 
 * @method integer               getId()             Returns the current record's "id" value
 * @method integer               getAnswerId()       Returns the current record's "answer_id" value
 * @method integer               getAnswervalueId()  Returns the current record's "answervalue_id" value
 * @method Answer                getAnswer()         Returns the current record's "Answer" value
 * @method Answervalue           getAnswervalue()    Returns the current record's "Answervalue" value
 * @method MtmAnswer2answervalue setId()             Sets the current record's "id" value
 * @method MtmAnswer2answervalue setAnswerId()       Sets the current record's "answer_id" value
 * @method MtmAnswer2answervalue setAnswervalueId()  Sets the current record's "answervalue_id" value
 * @method MtmAnswer2answervalue setAnswer()         Sets the current record's "Answer" value
 * @method MtmAnswer2answervalue setAnswervalue()    Sets the current record's "Answervalue" value
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMtmAnswer2answervalue extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mtm_answer2answervalue');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('answer_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('answervalue_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Answer', array(
             'local' => 'answer_id',
             'foreign' => 'id'));

        $this->hasOne('Answervalue', array(
             'local' => 'answervalue_id',
             'foreign' => 'id'));
    }
}