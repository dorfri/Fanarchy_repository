<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MtmSiteusers2team', 'doctrine');

/**
 * BaseMtmSiteusers2team
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $team_id
 * @property integer $siteusers_id
 * @property timestamp $joindate
 * @property timestamp $expirationdate
 * @property Team $Team
 * @property Siteusers $Siteusers
 * 
 * @method integer           getId()             Returns the current record's "id" value
 * @method integer           getTeamId()         Returns the current record's "team_id" value
 * @method integer           getSiteusersId()    Returns the current record's "siteusers_id" value
 * @method timestamp         getJoindate()       Returns the current record's "joindate" value
 * @method timestamp         getExpirationdate() Returns the current record's "expirationdate" value
 * @method Team              getTeam()           Returns the current record's "Team" value
 * @method Siteusers         getSiteusers()      Returns the current record's "Siteusers" value
 * @method MtmSiteusers2team setId()             Sets the current record's "id" value
 * @method MtmSiteusers2team setTeamId()         Sets the current record's "team_id" value
 * @method MtmSiteusers2team setSiteusersId()    Sets the current record's "siteusers_id" value
 * @method MtmSiteusers2team setJoindate()       Sets the current record's "joindate" value
 * @method MtmSiteusers2team setExpirationdate() Sets the current record's "expirationdate" value
 * @method MtmSiteusers2team setTeam()           Sets the current record's "Team" value
 * @method MtmSiteusers2team setSiteusers()      Sets the current record's "Siteusers" value
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMtmSiteusers2team extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mtm_siteusers2team');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('team_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('siteusers_id', 'integer', 10, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 10,
             ));
        $this->hasColumn('joindate', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 25,
             ));
        $this->hasColumn('expirationdate', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Team', array(
             'local' => 'team_id',
             'foreign' => 'id'));

        $this->hasOne('Siteusers', array(
             'local' => 'siteusers_id',
             'foreign' => 'id'));
    }
}