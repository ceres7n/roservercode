<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneSeal.proto

namespace RO\Cmd {

  class SealItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $config = 0;
    
    /**  @var int */
    public $refreshtime = 0;
    
    /**  @var boolean */
    public $ownseal = false;
    
    /**  @var \RO\Cmd\ScenePos */
    public $pos = null;
    
    /**  @var int */
    public $sealid = 0;
    
    /**  @var boolean */
    public $issealing = false;
    
    /**  @var int - \RO\Cmd\ESealType */
    public $etype = \RO\Cmd\ESealType::ESEALTYPE_NORMAL;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SealItem');

      // OPTIONAL UINT32 config = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "config";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 refreshtime = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "refreshtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL ownseal = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "ownseal";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pos = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      // OPTIONAL UINT64 sealid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sealid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL issealing = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "issealing";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL ENUM etype = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESealType';
      $f->default   = \RO\Cmd\ESealType::ESEALTYPE_NORMAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <config> has a value
     *
     * @return boolean
     */
    public function hasConfig(){
      return $this->_has(1);
    }
    
    /**
     * Clear <config> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearConfig(){
      return $this->_clear(1);
    }
    
    /**
     * Get <config> value
     *
     * @return int
     */
    public function getConfig(){
      return $this->_get(1);
    }
    
    /**
     * Set <config> value
     *
     * @param int $value
     * @return \RO\Cmd\SealItem
     */
    public function setConfig( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <refreshtime> has a value
     *
     * @return boolean
     */
    public function hasRefreshtime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <refreshtime> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearRefreshtime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <refreshtime> value
     *
     * @return int
     */
    public function getRefreshtime(){
      return $this->_get(2);
    }
    
    /**
     * Set <refreshtime> value
     *
     * @param int $value
     * @return \RO\Cmd\SealItem
     */
    public function setRefreshtime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <ownseal> has a value
     *
     * @return boolean
     */
    public function hasOwnseal(){
      return $this->_has(3);
    }
    
    /**
     * Clear <ownseal> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearOwnseal(){
      return $this->_clear(3);
    }
    
    /**
     * Get <ownseal> value
     *
     * @return boolean
     */
    public function getOwnseal(){
      return $this->_get(3);
    }
    
    /**
     * Set <ownseal> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SealItem
     */
    public function setOwnseal( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(4);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearPos(){
      return $this->_clear(4);
    }
    
    /**
     * Get <pos> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getPos(){
      return $this->_get(4);
    }
    
    /**
     * Set <pos> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\SealItem
     */
    public function setPos(\RO\Cmd\ScenePos $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <sealid> has a value
     *
     * @return boolean
     */
    public function hasSealid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <sealid> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearSealid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <sealid> value
     *
     * @return int
     */
    public function getSealid(){
      return $this->_get(5);
    }
    
    /**
     * Set <sealid> value
     *
     * @param int $value
     * @return \RO\Cmd\SealItem
     */
    public function setSealid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <issealing> has a value
     *
     * @return boolean
     */
    public function hasIssealing(){
      return $this->_has(6);
    }
    
    /**
     * Clear <issealing> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearIssealing(){
      return $this->_clear(6);
    }
    
    /**
     * Get <issealing> value
     *
     * @return boolean
     */
    public function getIssealing(){
      return $this->_get(6);
    }
    
    /**
     * Set <issealing> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SealItem
     */
    public function setIssealing( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(7);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\SealItem
     */
    public function clearEtype(){
      return $this->_clear(7);
    }
    
    /**
     * Get <etype> value
     *
     * @return int - \RO\Cmd\ESealType
     */
    public function getEtype(){
      return $this->_get(7);
    }
    
    /**
     * Set <etype> value
     *
     * @param int - \RO\Cmd\ESealType $value
     * @return \RO\Cmd\SealItem
     */
    public function setEtype( $value){
      return $this->_set(7, $value);
    }
  }
}

