<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: UserEvent.proto

namespace RO\Cmd {

  class TrigNpcFuncUserEvent extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::USER_EVENT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\EventParam */
    public $param = \RO\Cmd\EventParam::USER_EVENT_NPC_FUNCTION;
    
    /**  @var int */
    public $npcguid = null;
    
    /**  @var int */
    public $funcid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TrigNpcFuncUserEvent');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::USER_EVENT_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EventParam';
      $f->default   = \RO\Cmd\EventParam::USER_EVENT_NPC_FUNCTION;
      $descriptor->addField($f);

      // REQUIRED UINT64 npcguid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "npcguid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED UINT32 funcid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "funcid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
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
     * @return \RO\Cmd\TrigNpcFuncUserEvent
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
     * @return \RO\Cmd\TrigNpcFuncUserEvent
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
     * @return \RO\Cmd\TrigNpcFuncUserEvent
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\EventParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\EventParam $value
     * @return \RO\Cmd\TrigNpcFuncUserEvent
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <npcguid> has a value
     *
     * @return boolean
     */
    public function hasNpcguid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <npcguid> value
     *
     * @return \RO\Cmd\TrigNpcFuncUserEvent
     */
    public function clearNpcguid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <npcguid> value
     *
     * @return int
     */
    public function getNpcguid(){
      return $this->_get(3);
    }
    
    /**
     * Set <npcguid> value
     *
     * @param int $value
     * @return \RO\Cmd\TrigNpcFuncUserEvent
     */
    public function setNpcguid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <funcid> has a value
     *
     * @return boolean
     */
    public function hasFuncid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <funcid> value
     *
     * @return \RO\Cmd\TrigNpcFuncUserEvent
     */
    public function clearFuncid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <funcid> value
     *
     * @return int
     */
    public function getFuncid(){
      return $this->_get(4);
    }
    
    /**
     * Set <funcid> value
     *
     * @param int $value
     * @return \RO\Cmd\TrigNpcFuncUserEvent
     */
    public function setFuncid( $value){
      return $this->_set(4, $value);
    }
  }
}

