<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MtmSegment2fangroup', 'doctrine');

/**
 * BaseMtmSegment2fangroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $segment_id
 * @property integer $fangroup_id
 * @property Fangroup $Fangroup
 * @property Segment $Segment
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getSegmentId()   Returns the current record's "segment_id" value
 * @method integer             getFangroupId()  Returns the current record's "fangroup_id" value
 * @method Fangroup            getFangroup()    Returns the current record's "Fangroup" value
 * @method Segment             getSegment()     Returns the current record's "Segment" value
 * @method MtmSegment2fangroup setId()          Sets the current record's "id" value
 * @method MtmSegment2fangroup setSegmentId()   Sets the current record's "segment_id" value
 * @method MtmSegment2fangroup setFangroupId()  Sets the current record's "fangroup_id" value
 * @method MtmSegment2fangroup setFangroup()    Sets the current record's "Fangroup" value
 * @method MtmSegment2fangroup setSegment()     Sets the current record's "Segment" value
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMtmSegment2fangroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mtm_segment2fangroup');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('segment_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('fangroup_id', 'integer', 4, array(
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
        $this->hasOne('Fangroup', array(
             'local' => 'fangroup_id',
             'foreign' => 'id'));

        $this->hasOne('Segment', array(
             'local' => 'segment_id',
             'foreign' => 'id'));
    }
}