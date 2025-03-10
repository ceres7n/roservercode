<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class GameTimeCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_GAMETIME;
    
    /**  @var int - \RO\Cmd\GameTimeOpt */
    public $opt = \RO\Cmd\GameTimeOpt::EGAMETIMEOPT_SYNC;
    
    /**  @var int */
    public $sec = 1;
    
    /**  @var int */
    public $speed = 1;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GameTimeCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_GAMETIME;
      $descriptor->addField($f);

      // OPTIONAL ENUM opt = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "opt";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GameTimeOpt';
      $f->default   = \RO\Cmd\GameTimeOpt::EGAMETIMEOPT_SYNC;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sec = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sec";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
      $descriptor->addField($f);

      // OPTIONAL UINT32 speed = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "speed";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
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
     * @return \RO\Cmd\GameTimeCmd
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
     * @return \RO\Cmd\GameTimeCmd
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
     * @return \RO\Cmd\GameTimeCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\GameTimeCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <opt> has a value
     *
     * @return boolean
     */
    public function hasOpt(){
      return $this->_has(3);
    }
    
    /**
     * Clear <opt> value
     *
     * @return \RO\Cmd\GameTimeCmd
     */
    public function clearOpt(){
      return $this->_clear(3);
    }
    
    /**
     * Get <opt> value
     *
     * @return int - \RO\Cmd\GameTimeOpt
     */
    public function getOpt(){
      return $this->_get(3);
    }
    
    /**
     * Set <opt> value
     *
     * @param int - \RO\Cmd\GameTimeOpt $value
     * @return \RO\Cmd\GameTimeCmd
     */
    public function setOpt( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sec> has a value
     *
     * @return boolean
     */
    public function hasSec(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sec> value
     *
     * @return \RO\Cmd\GameTimeCmd
     */
    public function clearSec(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sec> value
     *
     * @return int
     */
    public function getSec(){
      return $this->_get(4);
    }
    
    /**
     * Set <sec> value
     *
     * @param int $value
     * @return \RO\Cmd\GameTimeCmd
     */
    public function setSec( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <speed> has a value
     *
     * @return boolean
     */
    public function hasSpeed(){
      return $this->_has(5);
    }
    
    /**
     * Clear <speed> value
     *
     * @return \RO\Cmd\GameTimeCmd
     */
    public function clearSpeed(){
      return $this->_clear(5);
    }
    
    /**
     * Get <speed> value
     *
     * @return int
     */
    public function getSpeed(){
      return $this->_get(5);
    }
    
    /**
     * Set <speed> value
     *
     * @param int $value
     * @return \RO\Cmd\GameTimeCmd
     */
    public function setSpeed( $value){
      return $this->_set(5, $value);
    }
  }
}

