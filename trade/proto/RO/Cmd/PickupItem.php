<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneMap.proto

namespace RO\Cmd {

  class PickupItem extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_MAP_PROTOCMD;
    
    /**  @var int - \RO\Cmd\MapParam */
    public $param = \RO\Cmd\MapParam::MAPPARAM_PICKUPITEM;
    
    /**  @var int */
    public $playerguid = 0;
    
    /**  @var int */
    public $itemguid = 0;
    
    /**  @var boolean */
    public $success = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PickupItem');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_MAP_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\MapParam';
      $f->default   = \RO\Cmd\MapParam::MAPPARAM_PICKUPITEM;
      $descriptor->addField($f);

      // OPTIONAL UINT64 playerguid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "playerguid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 itemguid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "itemguid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL success = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "success";
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
     * @return \RO\Cmd\PickupItem
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
     * @return \RO\Cmd\PickupItem
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
     * @return \RO\Cmd\PickupItem
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\MapParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\MapParam $value
     * @return \RO\Cmd\PickupItem
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <playerguid> has a value
     *
     * @return boolean
     */
    public function hasPlayerguid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <playerguid> value
     *
     * @return \RO\Cmd\PickupItem
     */
    public function clearPlayerguid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <playerguid> value
     *
     * @return int
     */
    public function getPlayerguid(){
      return $this->_get(3);
    }
    
    /**
     * Set <playerguid> value
     *
     * @param int $value
     * @return \RO\Cmd\PickupItem
     */
    public function setPlayerguid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <itemguid> has a value
     *
     * @return boolean
     */
    public function hasItemguid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <itemguid> value
     *
     * @return \RO\Cmd\PickupItem
     */
    public function clearItemguid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <itemguid> value
     *
     * @return int
     */
    public function getItemguid(){
      return $this->_get(4);
    }
    
    /**
     * Set <itemguid> value
     *
     * @param int $value
     * @return \RO\Cmd\PickupItem
     */
    public function setItemguid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <success> has a value
     *
     * @return boolean
     */
    public function hasSuccess(){
      return $this->_has(5);
    }
    
    /**
     * Clear <success> value
     *
     * @return \RO\Cmd\PickupItem
     */
    public function clearSuccess(){
      return $this->_clear(5);
    }
    
    /**
     * Get <success> value
     *
     * @return boolean
     */
    public function getSuccess(){
      return $this->_get(5);
    }
    
    /**
     * Set <success> value
     *
     * @param boolean $value
     * @return \RO\Cmd\PickupItem
     */
    public function setSuccess( $value){
      return $this->_set(5, $value);
    }
  }
}

