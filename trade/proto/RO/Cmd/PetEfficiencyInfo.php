<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class PetEfficiencyInfo extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EPetEfficiencyType */
    public $etype = null;
    
    /**  @var int */
    public $fvalue = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PetEfficiencyInfo');

      // REQUIRED ENUM etype = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\RO\Cmd\EPetEfficiencyType';
      $descriptor->addField($f);

      // OPTIONAL UINT32 fvalue = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "fvalue";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(1);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\PetEfficiencyInfo
     */
    public function clearEtype(){
      return $this->_clear(1);
    }
    
    /**
     * Get <etype> value
     *
     * @return int - \RO\Cmd\EPetEfficiencyType
     */
    public function getEtype(){
      return $this->_get(1);
    }
    
    /**
     * Set <etype> value
     *
     * @param int - \RO\Cmd\EPetEfficiencyType $value
     * @return \RO\Cmd\PetEfficiencyInfo
     */
    public function setEtype( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <fvalue> has a value
     *
     * @return boolean
     */
    public function hasFvalue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <fvalue> value
     *
     * @return \RO\Cmd\PetEfficiencyInfo
     */
    public function clearFvalue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <fvalue> value
     *
     * @return int
     */
    public function getFvalue(){
      return $this->_get(2);
    }
    
    /**
     * Set <fvalue> value
     *
     * @param int $value
     * @return \RO\Cmd\PetEfficiencyInfo
     */
    public function setFvalue( $value){
      return $this->_set(2, $value);
    }
  }
}

