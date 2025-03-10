<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class PetWearInfo extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EEquipPos */
    public $epos = null;
    
    /**  @var int */
    public $itemid = null;
    
    /**  @var int - \RO\Cmd\EPetEquipOper */
    public $oper = \RO\Cmd\EPetEquipOper::EPETEQUIPOPER_ON;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PetWearInfo');

      // REQUIRED ENUM epos = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "epos";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\RO\Cmd\EEquipPos';
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM oper = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "oper";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EPetEquipOper';
      $f->default   = \RO\Cmd\EPetEquipOper::EPETEQUIPOPER_ON;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <epos> has a value
     *
     * @return boolean
     */
    public function hasEpos(){
      return $this->_has(4);
    }
    
    /**
     * Clear <epos> value
     *
     * @return \RO\Cmd\PetWearInfo
     */
    public function clearEpos(){
      return $this->_clear(4);
    }
    
    /**
     * Get <epos> value
     *
     * @return int - \RO\Cmd\EEquipPos
     */
    public function getEpos(){
      return $this->_get(4);
    }
    
    /**
     * Set <epos> value
     *
     * @param int - \RO\Cmd\EEquipPos $value
     * @return \RO\Cmd\PetWearInfo
     */
    public function setEpos( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\PetWearInfo
     */
    public function clearItemid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(5);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\PetWearInfo
     */
    public function setItemid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <oper> has a value
     *
     * @return boolean
     */
    public function hasOper(){
      return $this->_has(6);
    }
    
    /**
     * Clear <oper> value
     *
     * @return \RO\Cmd\PetWearInfo
     */
    public function clearOper(){
      return $this->_clear(6);
    }
    
    /**
     * Get <oper> value
     *
     * @return int - \RO\Cmd\EPetEquipOper
     */
    public function getOper(){
      return $this->_get(6);
    }
    
    /**
     * Set <oper> value
     *
     * @param int - \RO\Cmd\EPetEquipOper $value
     * @return \RO\Cmd\PetWearInfo
     */
    public function setOper( $value){
      return $this->_set(6, $value);
    }
  }
}

