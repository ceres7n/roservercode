<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class WeaponPetData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $hp = 0;
    
    /**  @var int */
    public $relivetime = 0;
    
    /**  @var int */
    public $expiretime = 0;
    
    /**  @var boolean */
    public $blive = false;
    
    /**  @var boolean */
    public $bactive = false;
    
    /**  @var boolean */
    public $handstatus = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.WeaponPetData');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 hp = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "hp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 relivetime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "relivetime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 expiretime = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "expiretime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL blive = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "blive";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL bactive = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "bactive";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL handstatus = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "handstatus";
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
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <hp> has a value
     *
     * @return boolean
     */
    public function hasHp(){
      return $this->_has(2);
    }
    
    /**
     * Clear <hp> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearHp(){
      return $this->_clear(2);
    }
    
    /**
     * Get <hp> value
     *
     * @return int
     */
    public function getHp(){
      return $this->_get(2);
    }
    
    /**
     * Set <hp> value
     *
     * @param int $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setHp( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <relivetime> has a value
     *
     * @return boolean
     */
    public function hasRelivetime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <relivetime> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearRelivetime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <relivetime> value
     *
     * @return int
     */
    public function getRelivetime(){
      return $this->_get(3);
    }
    
    /**
     * Set <relivetime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setRelivetime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <expiretime> has a value
     *
     * @return boolean
     */
    public function hasExpiretime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <expiretime> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearExpiretime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <expiretime> value
     *
     * @return int
     */
    public function getExpiretime(){
      return $this->_get(4);
    }
    
    /**
     * Set <expiretime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setExpiretime( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <blive> has a value
     *
     * @return boolean
     */
    public function hasBlive(){
      return $this->_has(5);
    }
    
    /**
     * Clear <blive> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearBlive(){
      return $this->_clear(5);
    }
    
    /**
     * Get <blive> value
     *
     * @return boolean
     */
    public function getBlive(){
      return $this->_get(5);
    }
    
    /**
     * Set <blive> value
     *
     * @param boolean $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setBlive( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <bactive> has a value
     *
     * @return boolean
     */
    public function hasBactive(){
      return $this->_has(6);
    }
    
    /**
     * Clear <bactive> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearBactive(){
      return $this->_clear(6);
    }
    
    /**
     * Get <bactive> value
     *
     * @return boolean
     */
    public function getBactive(){
      return $this->_get(6);
    }
    
    /**
     * Set <bactive> value
     *
     * @param boolean $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setBactive( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <handstatus> has a value
     *
     * @return boolean
     */
    public function hasHandstatus(){
      return $this->_has(7);
    }
    
    /**
     * Clear <handstatus> value
     *
     * @return \RO\Cmd\WeaponPetData
     */
    public function clearHandstatus(){
      return $this->_clear(7);
    }
    
    /**
     * Get <handstatus> value
     *
     * @return boolean
     */
    public function getHandstatus(){
      return $this->_get(7);
    }
    
    /**
     * Set <handstatus> value
     *
     * @param boolean $value
     * @return \RO\Cmd\WeaponPetData
     */
    public function setHandstatus( $value){
      return $this->_set(7, $value);
    }
  }
}

