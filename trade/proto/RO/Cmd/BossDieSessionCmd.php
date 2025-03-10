<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class BossDieSessionCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::BOSS_DIE_SESSIONCMD;
    
    /**  @var int */
    public $npcid = null;
    
    /**  @var string */
    public $killer = null;
    
    /**  @var int */
    public $killid = null;
    
    /**  @var int */
    public $mapid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BossDieSessionCmd');

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
      $f->default   = \RO\Cmd\SessionParam::BOSS_DIE_SESSIONCMD;
      $descriptor->addField($f);

      // OPTIONAL UINT32 npcid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "npcid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING killer = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "killer";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 killid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "killid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mapid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "mapid";
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
     * @return \RO\Cmd\BossDieSessionCmd
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
     * @return \RO\Cmd\BossDieSessionCmd
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
     * @return \RO\Cmd\BossDieSessionCmd
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
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <npcid> has a value
     *
     * @return boolean
     */
    public function hasNpcid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <npcid> value
     *
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function clearNpcid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <npcid> value
     *
     * @return int
     */
    public function getNpcid(){
      return $this->_get(3);
    }
    
    /**
     * Set <npcid> value
     *
     * @param int $value
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function setNpcid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <killer> has a value
     *
     * @return boolean
     */
    public function hasKiller(){
      return $this->_has(4);
    }
    
    /**
     * Clear <killer> value
     *
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function clearKiller(){
      return $this->_clear(4);
    }
    
    /**
     * Get <killer> value
     *
     * @return string
     */
    public function getKiller(){
      return $this->_get(4);
    }
    
    /**
     * Set <killer> value
     *
     * @param string $value
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function setKiller( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <killid> has a value
     *
     * @return boolean
     */
    public function hasKillid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <killid> value
     *
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function clearKillid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <killid> value
     *
     * @return int
     */
    public function getKillid(){
      return $this->_get(5);
    }
    
    /**
     * Set <killid> value
     *
     * @param int $value
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function setKillid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <mapid> has a value
     *
     * @return boolean
     */
    public function hasMapid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <mapid> value
     *
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function clearMapid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <mapid> value
     *
     * @return int
     */
    public function getMapid(){
      return $this->_get(6);
    }
    
    /**
     * Set <mapid> value
     *
     * @param int $value
     * @return \RO\Cmd\BossDieSessionCmd
     */
    public function setMapid( $value){
      return $this->_set(6, $value);
    }
  }
}

