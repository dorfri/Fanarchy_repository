<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Vote', 'doctrine');

/**
 * BaseVote
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $summary
 * @property string $text
 * @property timestamp $activationstarttime
 * @property timestamp $activationendtime
 * @property timestamp $resultpublishplandate
 * @property integer $isresultpublishd
 * @property timestamp $creationtime
 * @property integer $allowfreemium
 * @property integer $Mediapicture_id
 * @property integer $Team_id
 * @property integer $Mediavideo_id
 * @property integer $Timezone_id
 * @property integer $Status_id
 * @property integer $Segment_id
 * @property Mediapicture $Mediapicture
 * @property Team $Team
 * @property Mediavideo $Mediavideo
 * @property Timezone $Timezone
 * @property Status $Status
 * @property Segment $Segment
 * @property Doctrine_Collection $Answer
 * @property Doctrine_Collection $Question
 * @property Doctrine_Collection $Voteinstance
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method string              getTitle()                 Returns the current record's "title" value
 * @method string              getSummary()               Returns the current record's "summary" value
 * @method string              getText()                  Returns the current record's "text" value
 * @method timestamp           getActivationstarttime()   Returns the current record's "activationstarttime" value
 * @method timestamp           getActivationendtime()     Returns the current record's "activationendtime" value
 * @method timestamp           getResultpublishplandate() Returns the current record's "resultpublishplandate" value
 * @method integer             getIsresultpublishd()      Returns the current record's "isresultpublishd" value
 * @method timestamp           getCreationtime()          Returns the current record's "creationtime" value
 * @method integer             getAllowfreemium()         Returns the current record's "allowfreemium" value
 * @method integer             getMediapictureId()        Returns the current record's "Mediapicture_id" value
 * @method integer             getTeamId()                Returns the current record's "Team_id" value
 * @method integer             getMediavideoId()          Returns the current record's "Mediavideo_id" value
 * @method integer             getTimezoneId()            Returns the current record's "Timezone_id" value
 * @method integer             getStatusId()              Returns the current record's "Status_id" value
 * @method integer             getSegmentId()             Returns the current record's "Segment_id" value
 * @method Mediapicture        getMediapicture()          Returns the current record's "Mediapicture" value
 * @method Team                getTeam()                  Returns the current record's "Team" value
 * @method Mediavideo          getMediavideo()            Returns the current record's "Mediavideo" value
 * @method Timezone            getTimezone()              Returns the current record's "Timezone" value
 * @method Status              getStatus()                Returns the current record's "Status" value
 * @method Segment             getSegment()               Returns the current record's "Segment" value
 * @method Doctrine_Collection getAnswer()                Returns the current record's "Answer" collection
 * @method Doctrine_Collection getQuestion()              Returns the current record's "Question" collection
 * @method Doctrine_Collection getVoteinstance()          Returns the current record's "Voteinstance" collection
 * @method Vote                setId()                    Sets the current record's "id" value
 * @method Vote                setTitle()                 Sets the current record's "title" value
 * @method Vote                setSummary()               Sets the current record's "summary" value
 * @method Vote                setText()                  Sets the current record's "text" value
 * @method Vote                setActivationstarttime()   Sets the current record's "activationstarttime" value
 * @method Vote                setActivationendtime()     Sets the current record's "activationendtime" value
 * @method Vote                setResultpublishplandate() Sets the current record's "resultpublishplandate" value
 * @method Vote                setIsresultpublishd()      Sets the current record's "isresultpublishd" value
 * @method Vote                setCreationtime()          Sets the current record's "creationtime" value
 * @method Vote                setAllowfreemium()         Sets the current record's "allowfreemium" value
 * @method Vote                setMediapictureId()        Sets the current record's "Mediapicture_id" value
 * @method Vote                setTeamId()                Sets the current record's "Team_id" value
 * @method Vote                setMediavideoId()          Sets the current record's "Mediavideo_id" value
 * @method Vote                setTimezoneId()            Sets the current record's "Timezone_id" value
 * @method Vote                setStatusId()              Sets the current record's "Status_id" value
 * @method Vote                setSegmentId()             Sets the current record's "Segment_id" value
 * @method Vote                setMediapicture()          Sets the current record's "Mediapicture" value
 * @method Vote                setTeam()                  Sets the current record's "Team" value
 * @method Vote                setMediavideo()            Sets the current record's "Mediavideo" value
 * @method Vote                setTimezone()              Sets the current record's "Timezone" value
 * @method Vote                setStatus()                Sets the current record's "Status" value
 * @method Vote                setSegment()               Sets the current record's "Segment" value
 * @method Vote                setAnswer()                Sets the current record's "Answer" collection
 * @method Vote                setQuestion()              Sets the current record's "Question" collection
 * @method Vote                setVoteinstance()          Sets the current record's "Voteinstance" collection
 * 
 * @package    PhpProject2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVote extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vote');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 40,
             ));
        $this->hasColumn('summary', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 250,
             ));
        $this->hasColumn('text', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             ));
        $this->hasColumn('activationstarttime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 25,
             ));
        $this->hasColumn('activationendtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 25,
             ));
        $this->hasColumn('resultpublishplandate', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 25,
             ));
        $this->hasColumn('isresultpublishd', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 1,
             ));
        $this->hasColumn('creationtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 25,
             ));
        $this->hasColumn('allowfreemium', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'unsigned' => false,
             'fixed' => 0,
             'length' => 1,
             ));
        $this->hasColumn('Mediapicture_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('Team_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('Mediavideo_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('Timezone_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('Status_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('Segment_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Mediapicture', array(
             'local' => 'Mediapicture_id',
             'foreign' => 'id'));

        $this->hasOne('Team', array(
             'local' => 'Team_id',
             'foreign' => 'id'));

        $this->hasOne('Mediavideo', array(
             'local' => 'Mediavideo_id',
             'foreign' => 'id'));

        $this->hasOne('Timezone', array(
             'local' => 'Timezone_id',
             'foreign' => 'id'));

        $this->hasOne('Status', array(
             'local' => 'Status_id',
             'foreign' => 'id'));

        $this->hasOne('Segment', array(
             'local' => 'Segment_id',
             'foreign' => 'id'));

        $this->hasMany('Answer', array(
             'local' => 'id',
             'foreign' => 'Vote_id'));

        $this->hasMany('Question', array(
             'local' => 'id',
             'foreign' => 'Vote_id'));

        $this->hasMany('Voteinstance', array(
             'local' => 'id',
             'foreign' => 'Vote_id'));
    }
}