<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('City', 'doctrine');

/**
 * BaseCity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $Country_id
 * @property integer $State_id
 * @property Country $Country
 * @property State $State
 * @property Doctrine_Collection $Address
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getName()       Returns the current record's "name" value
 * @method integer             getCountryId()  Returns the current record's "Country_id" value
 * @method integer             getStateId()    Returns the current record's "State_id" value
 * @method Country             getCountry()    Returns the current record's "Country" value
 * @method State               getState()      Returns the current record's "State" value
 * @method Doctrine_Collection getAddress()    Returns the current record's "Address" collection
 * @method City                setId()         Sets the current record's "id" value
 * @method City                setName()       Sets the current record's "name" value
 * @method City                setCountryId()  Sets the current record's "Country_id" value
 * @method City                setStateId()    Sets the current record's "State_id" value
 * @method City                setCountry()    Sets the current record's "Country" value
 * @method City                setState()      Sets the current record's "State" value
 * @method City                setAddress()    Sets the current record's "Address" collection
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('city');
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
        $this->hasColumn('Country_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('State_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Country', array(
             'local' => 'Country_id',
             'foreign' => 'id'));

        $this->hasOne('State', array(
             'local' => 'State_id',
             'foreign' => 'id'));

        $this->hasMany('Address', array(
             'local' => 'id',
             'foreign' => 'City_id'));
    }
}