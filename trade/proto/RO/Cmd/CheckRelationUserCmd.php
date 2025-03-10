<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class CheckRelationUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_CHECK_RELATION;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int - \RO\Cmd\ESocialRelation */
    public $etype = \RO\Cmd\ESocialRelation::ESOCIALRELATION_MIN;
    
    /**  @var boolean */
    public $ret = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.CheckRelationUserCmd');

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
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_CHECK_RELATION;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM etype = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESocialRelation';
      $f->default   = \RO\Cmd\ESocialRelation::ESOCIALRELATION_MIN;
      $descriptor->addField($f);

      // OPTIONAL BOOL ret = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "ret";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
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
     * @return \RO\Cmd\CheckRelationUserCmd
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
     * @return \RO\Cmd\CheckRelationUserCmd
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
     * @return \RO\Cmd\CheckRelationUserCmd
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
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(4);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function clearEtype(){
      return $this->_clear(4);
    }
    
    /**
     * Get <etype> value
     *
     * @return int - \RO\Cmd\ESocialRelation
     */
    public function getEtype(){
      return $this->_get(4);
    }
    
    /**
     * Set <etype> value
     *
     * @param int - \RO\Cmd\ESocialRelation $value
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function setEtype( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <ret> has a value
     *
     * @return boolean
     */
    public function hasRet(){
      return $this->_has(5);
    }
    
    /**
     * Clear <ret> value
     *
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function clearRet(){
      return $this->_clear(5);
    }
    
    /**
     * Get <ret> value
     *
     * @return boolean
     */
    public function getRet(){
      return $this->_get(5);
    }
    
    /**
     * Set <ret> value
     *
     * @param boolean $value
     * @return \RO\Cmd\CheckRelationUserCmd
     */
    public function setRet( $value){
      return $this->_set(5, $value);
    }
  }
}

