<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class GuildRaidCloseSessionCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::SESSIONPARAM_GUILDRAID_CLOSE;
    
    /**  @var int */
    public $mapid = 0;
    
    /**  @var int */
    public $curmapindex = 0;
    
    /**  @var int */
    public $guildid = 0;
    
    /**  @var int */
    public $teamid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildRaidCloseSessionCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SessionParam';
      $f->default   = \RO\Cmd\SessionParam::SESSIONPARAM_GUILDRAID_CLOSE;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mapid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "mapid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 curmapindex = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "curmapindex";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guildid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "guildid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 teamid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "teamid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
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
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
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
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
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
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SessionParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SessionParam $value
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <mapid> has a value
     *
     * @return boolean
     */
    public function hasMapid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <mapid> value
     *
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function clearMapid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <mapid> value
     *
     * @return int
     */
    public function getMapid(){
      return $this->_get(3);
    }
    
    /**
     * Set <mapid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function setMapid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <curmapindex> has a value
     *
     * @return boolean
     */
    public function hasCurmapindex(){
      return $this->_has(4);
    }
    
    /**
     * Clear <curmapindex> value
     *
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function clearCurmapindex(){
      return $this->_clear(4);
    }
    
    /**
     * Get <curmapindex> value
     *
     * @return int
     */
    public function getCurmapindex(){
      return $this->_get(4);
    }
    
    /**
     * Set <curmapindex> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function setCurmapindex( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <guildid> has a value
     *
     * @return boolean
     */
    public function hasGuildid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <guildid> value
     *
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function clearGuildid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <guildid> value
     *
     * @return int
     */
    public function getGuildid(){
      return $this->_get(5);
    }
    
    /**
     * Set <guildid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function setGuildid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <teamid> has a value
     *
     * @return boolean
     */
    public function hasTeamid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <teamid> value
     *
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function clearTeamid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <teamid> value
     *
     * @return int
     */
    public function getTeamid(){
      return $this->_get(6);
    }
    
    /**
     * Set <teamid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildRaidCloseSessionCmd
     */
    public function setTeamid( $value){
      return $this->_set(6, $value);
    }
  }
}

