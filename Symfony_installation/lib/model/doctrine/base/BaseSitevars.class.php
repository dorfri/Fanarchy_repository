<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Sitevars', 'doctrine');

/**
 * BaseSitevars
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $value
 * @property string $description
 * @property integer $Team_id
 * @property Team $Team
 * 
 * @method integer  getId()          Returns the current record's "id" value
 * @method string   getName()        Returns the current record's "name" value
 * @method string   getValue()       Returns the current record's "value" value
 * @method string   getDescription() Returns the current record's "description" value
 * @method integer  getTeamId()      Returns the current record's "Team_id" value
 * @method Team     getTeam()        Returns the current record's "Team" value
 * @method Sitevars setId()          Sets the current record's "id" value
 * @method Sitevars setName()        Sets the current record's "name" value
 * @method Sitevars setValue()       Sets the current record's "value" value
 * @method Sitevars setDescription() Sets the current record's "description" value
 * @method Sitevars setTeamId()      Sets the current record's "Team_id" value
 * @method Sitevars setTeam()        Sets the current record's "Team" value
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSitevars extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sitevars');
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
        $this->hasColumn('value', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 55, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 55,
             ));
        $this->hasColumn('Team_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Team', array(
             'local' => 'Team_id',
             'foreign' => 'id'));
    }
}