<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class SetGuildOptionGuildCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildParam */
    public $param = \RO\Cmd\GuildParam::GUILDPARAM_SETOPTION;
    
    /**  @var string */
    public $board = null;
    
    /**  @var string */
    public $recruit = null;
    
    /**  @var string */
    public $portrait = null;
    
    /**  @var \RO\Cmd\GuildJob[]  */
    public $jobs = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SetGuildOptionGuildCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildParam';
      $f->default   = \RO\Cmd\GuildParam::GUILDPARAM_SETOPTION;
      $descriptor->addField($f);

      // OPTIONAL STRING board = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "board";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING recruit = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "recruit";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING portrait = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "portrait";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE jobs = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "jobs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildJob';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <cmd> has a value
     *
     * @return boolean
     */
    public function hasCmd(){
      return $this->_has(1);
    }
    
    /**
     * Clear <cmd> value
     *
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function clearCmd(){
      return $this->_clear(1);
    }
    
    /**
     * Get <cmd> value
     *
     * @return int - \RO\Cmd\Command
     */
    public function getCmd(){
      return $this->_get(1);
    }
    
    /**
     * Set <cmd> value
     *
     * @param int - \RO\Cmd\Command $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function setCmd( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <param> has a value
     *
     * @return boolean
     */
    public function hasParam(){
      return $this->_has(2);
    }
    
    /**
     * Clear <param> value
     *
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\GuildParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\GuildParam $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <board> has a value
     *
     * @return boolean
     */
    public function hasBoard(){
      return $this->_has(3);
    }
    
    /**
     * Clear <board> value
     *
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function clearBoard(){
      return $this->_clear(3);
    }
    
    /**
     * Get <board> value
     *
     * @return string
     */
    public function getBoard(){
      return $this->_get(3);
    }
    
    /**
     * Set <board> value
     *
     * @param string $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function setBoard( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <recruit> has a value
     *
     * @return boolean
     */
    public function hasRecruit(){
      return $this->_has(4);
    }
    
    /**
     * Clear <recruit> value
     *
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function clearRecruit(){
      return $this->_clear(4);
    }
    
    /**
     * Get <recruit> value
     *
     * @return string
     */
    public function getRecruit(){
      return $this->_get(4);
    }
    
    /**
     * Set <recruit> value
     *
     * @param string $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function setRecruit( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <portrait> has a value
     *
     * @return boolean
     */
    public function hasPortrait(){
      return $this->_has(5);
    }
    
    /**
     * Clear <portrait> value
     *
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function clearPortrait(){
      return $this->_clear(5);
    }
    
    /**
     * Get <portrait> value
     *
     * @return string
     */
    public function getPortrait(){
      return $this->_get(5);
    }
    
    /**
     * Set <portrait> value
     *
     * @param string $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function setPortrait( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <jobs> has a value
     *
     * @return boolean
     */
    public function hasJobs(){
      return $this->_has(6);
    }
    
    /**
     * Clear <jobs> value
     *
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function clearJobs(){
      return $this->_clear(6);
    }
    
    /**
     * Get <jobs> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildJob
     */
    public function getJobs($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <jobs> value
     *
     * @param \RO\Cmd\GuildJob $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function setJobs(\RO\Cmd\GuildJob $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <jobs>
     *
     * @return \RO\Cmd\GuildJob[]
     */
    public function getJobsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <jobs>
     *
     * @param \RO\Cmd\GuildJob $value
     * @return \RO\Cmd\SetGuildOptionGuildCmd
     */
    public function addJobs(\RO\Cmd\GuildJob $value){
     return $this->_add(6, $value);
    }
  }
}

