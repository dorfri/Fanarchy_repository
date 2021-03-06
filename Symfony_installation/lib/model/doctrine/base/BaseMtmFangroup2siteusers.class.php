<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MtmFangroup2siteusers', 'doctrine');

/**
 * BaseMtmFangroup2siteusers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $fangroup_id
 * @property integer $siteuser_id
 * @property Fangroup $Fangroup
 * @property Siteusers $Siteusers
 * 
 * @method integer               getId()          Returns the current record's "id" value
 * @method integer               getFangroupId()  Returns the current record's "fangroup_id" value
 * @method integer               getSiteuserId()  Returns the current record's "siteuser_id" value
 * @method Fangroup              getFangroup()    Returns the current record's "Fangroup" value
 * @method Siteusers             getSiteusers()   Returns the current record's "Siteusers" value
 * @method MtmFangroup2siteusers setId()          Sets the current record's "id" value
 * @method MtmFangroup2siteusers setFangroupId()  Sets the current record's "fangroup_id" value
 * @method MtmFangroup2siteusers setSiteuserId()  Sets the current record's "siteuser_id" value
 * @method MtmFangroup2siteusers setFangroup()    Sets the current record's "Fangroup" value
 * @method MtmFangroup2siteusers setSiteusers()   Sets the current record's "Siteusers" value
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMtmFangroup2siteusers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mtm_fangroup2siteusers');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
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
        $this->hasColumn('siteuser_id', 'integer', 10, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Fangroup', array(
             'local' => 'fangroup_id',
             'foreign' => 'id'));

        $this->hasOne('Siteusers', array(
             'local' => 'siteuser_id',
             'foreign' => 'id'));
    }
}