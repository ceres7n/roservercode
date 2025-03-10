<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class ChallengeUpdateNtfGuildCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildParam */
    public $param = \RO\Cmd\GuildParam::GUILDPARAM_CHALLENGE_UPDATE;
    
    /**  @var \RO\Cmd\GuildChallenge[]  */
    public $updates = array();
    
    /**  @var \RO\Cmd\GuildChallenge[]  */
    public $dels = array();
    
    /**  @var int */
    public $refreshtime = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChallengeUpdateNtfGuildCmd');

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
      $f->default   = \RO\Cmd\GuildParam::GUILDPARAM_CHALLENGE_UPDATE;
      $descriptor->addField($f);

      // REPEATED MESSAGE updates = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "updates";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildChallenge';
      $descriptor->addField($f);

      // REPEATED MESSAGE dels = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "dels";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildChallenge';
      $descriptor->addField($f);

      // OPTIONAL UINT32 refreshtime = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "refreshtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
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
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
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
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
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
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <updates> has a value
     *
     * @return boolean
     */
    public function hasUpdates(){
      return $this->_has(3);
    }
    
    /**
     * Clear <updates> value
     *
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function clearUpdates(){
      return $this->_clear(3);
    }
    
    /**
     * Get <updates> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildChallenge
     */
    public function getUpdates($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <updates> value
     *
     * @param \RO\Cmd\GuildChallenge $value
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function setUpdates(\RO\Cmd\GuildChallenge $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <updates>
     *
     * @return \RO\Cmd\GuildChallenge[]
     */
    public function getUpdatesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <updates>
     *
     * @param \RO\Cmd\GuildChallenge $value
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function addUpdates(\RO\Cmd\GuildChallenge $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <dels> has a value
     *
     * @return boolean
     */
    public function hasDels(){
      return $this->_has(4);
    }
    
    /**
     * Clear <dels> value
     *
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function clearDels(){
      return $this->_clear(4);
    }
    
    /**
     * Get <dels> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildChallenge
     */
    public function getDels($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <dels> value
     *
     * @param \RO\Cmd\GuildChallenge $value
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function setDels(\RO\Cmd\GuildChallenge $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <dels>
     *
     * @return \RO\Cmd\GuildChallenge[]
     */
    public function getDelsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <dels>
     *
     * @param \RO\Cmd\GuildChallenge $value
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function addDels(\RO\Cmd\GuildChallenge $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <refreshtime> has a value
     *
     * @return boolean
     */
    public function hasRefreshtime(){
      return $this->_has(5);
    }
    
    /**
     * Clear <refreshtime> value
     *
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function clearRefreshtime(){
      return $this->_clear(5);
    }
    
    /**
     * Get <refreshtime> value
     *
     * @return int
     */
    public function getRefreshtime(){
      return $this->_get(5);
    }
    
    /**
     * Set <refreshtime> value
     *
     * @param int $value
     * @return \RO\Cmd\ChallengeUpdateNtfGuildCmd
     */
    public function setRefreshtime( $value){
      return $this->_set(5, $value);
    }
  }
}

