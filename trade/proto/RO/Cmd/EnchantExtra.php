<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class EnchantExtra extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $configid = 0;
    
    /**  @var int */
    public $buffid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.EnchantExtra');

      // OPTIONAL UINT32 configid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "configid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 buffid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "buffid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <configid> has a value
     *
     * @return boolean
     */
    public function hasConfigid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <configid> value
     *
     * @return \RO\Cmd\EnchantExtra
     */
    public function clearConfigid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <configid> value
     *
     * @return int
     */
    public function getConfigid(){
      return $this->_get(1);
    }
    
    /**
     * Set <configid> value
     *
     * @param int $value
     * @return \RO\Cmd\EnchantExtra
     */
    public function setConfigid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <buffid> has a value
     *
     * @return boolean
     */
    public function hasBuffid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <buffid> value
     *
     * @return \RO\Cmd\EnchantExtra
     */
    public function clearBuffid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <buffid> value
     *
     * @return int
     */
    public function getBuffid(){
      return $this->_get(2);
    }
    
    /**
     * Set <buffid> value
     *
     * @param int $value
     * @return \RO\Cmd\EnchantExtra
     */
    public function setBuffid( $value){
      return $this->_set(2, $value);
    }
  }
}

