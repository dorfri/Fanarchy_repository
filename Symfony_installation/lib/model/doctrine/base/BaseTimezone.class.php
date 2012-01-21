<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Timezone', 'doctrine');

/**
 * BaseTimezone
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $difffromgmt
 * @property Doctrine_Collection $Vote
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method integer             getDifffromgmt() Returns the current record's "difffromgmt" value
 * @method Doctrine_Collection getVote()        Returns the current record's "Vote" collection
 * @method Timezone            setId()          Sets the current record's "id" value
 * @method Timezone            setName()        Sets the current record's "name" value
 * @method Timezone            setDifffromgmt() Sets the current record's "difffromgmt" value
 * @method Timezone            setVote()        Sets the current record's "Vote" collection
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTimezone extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('timezone');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 50,
             ));
        $this->hasColumn('difffromgmt', 'integer', 4, array(
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
        $this->hasMany('Vote', array(
             'local' => 'id',
             'foreign' => 'Timezone_id'));
    }
}