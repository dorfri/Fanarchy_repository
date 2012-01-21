<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Segment', 'doctrine');

/**
 * BaseSegment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $agerangestart
 * @property integer $agerangeend
 * @property integer $estimatedreach
 * @property integer $Gender_id
 * @property Gender $Gender
 * @property Doctrine_Collection $Addresses
 * @property Doctrine_Collection $Fangroups
 * @property Doctrine_Collection $MtmSegment2address
 * @property Doctrine_Collection $MtmSegment2fangroup
 * @property Doctrine_Collection $Vote
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getName()                Returns the current record's "name" value
 * @method integer             getAgerangestart()       Returns the current record's "agerangestart" value
 * @method integer             getAgerangeend()         Returns the current record's "agerangeend" value
 * @method integer             getEstimatedreach()      Returns the current record's "estimatedreach" value
 * @method integer             getGenderId()            Returns the current record's "Gender_id" value
 * @method Gender              getGender()              Returns the current record's "Gender" value
 * @method Doctrine_Collection getAddresses()           Returns the current record's "Addresses" collection
 * @method Doctrine_Collection getFangroups()           Returns the current record's "Fangroups" collection
 * @method Doctrine_Collection getMtmSegment2address()  Returns the current record's "MtmSegment2address" collection
 * @method Doctrine_Collection getMtmSegment2fangroup() Returns the current record's "MtmSegment2fangroup" collection
 * @method Doctrine_Collection getVote()                Returns the current record's "Vote" collection
 * @method Segment             setId()                  Sets the current record's "id" value
 * @method Segment             setName()                Sets the current record's "name" value
 * @method Segment             setAgerangestart()       Sets the current record's "agerangestart" value
 * @method Segment             setAgerangeend()         Sets the current record's "agerangeend" value
 * @method Segment             setEstimatedreach()      Sets the current record's "estimatedreach" value
 * @method Segment             setGenderId()            Sets the current record's "Gender_id" value
 * @method Segment             setGender()              Sets the current record's "Gender" value
 * @method Segment             setAddresses()           Sets the current record's "Addresses" collection
 * @method Segment             setFangroups()           Sets the current record's "Fangroups" collection
 * @method Segment             setMtmSegment2address()  Sets the current record's "MtmSegment2address" collection
 * @method Segment             setMtmSegment2fangroup() Sets the current record's "MtmSegment2fangroup" collection
 * @method Segment             setVote()                Sets the current record's "Vote" collection
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSegment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('segment');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 255,
             ));
        $this->hasColumn('agerangestart', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('agerangeend', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('estimatedreach', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('Gender_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Gender', array(
             'local' => 'Gender_id',
             'foreign' => 'id'));

        $this->hasMany('Address as Addresses', array(
             'refClass' => 'MtmSegment2address',
             'local' => 'segment_id',
             'foreign' => 'address_id'));

        $this->hasMany('Fangroup as Fangroups', array(
             'refClass' => 'MtmSegment2fangroup',
             'local' => 'segment_id',
             'foreign' => 'fangroup_id'));

        $this->hasMany('MtmSegment2address', array(
             'local' => 'id',
             'foreign' => 'segment_id'));

        $this->hasMany('MtmSegment2fangroup', array(
             'local' => 'id',
             'foreign' => 'segment_id'));

        $this->hasMany('Vote', array(
             'local' => 'id',
             'foreign' => 'Segment_id'));
    }
}