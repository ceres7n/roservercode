<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class ShareDamage extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $damage = null;
    
    /**  @var string */
    public $target = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ShareDamage');

      // OPTIONAL UINT64 damage = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "damage";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING target = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "target";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <damage> has a value
     *
     * @return boolean
     */
    public function hasDamage(){
      return $this->_has(1);
    }
    
    /**
     * Clear <damage> value
     *
     * @return \RO\Cmd\ShareDamage
     */
    public function clearDamage(){
      return $this->_clear(1);
    }
    
    /**
     * Get <damage> value
     *
     * @return int
     */
    public function getDamage(){
      return $this->_get(1);
    }
    
    /**
     * Set <damage> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareDamage
     */
    public function setDamage( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <target> has a value
     *
     * @return boolean
     */
    public function hasTarget(){
      return $this->_has(2);
    }
    
    /**
     * Clear <target> value
     *
     * @return \RO\Cmd\ShareDamage
     */
    public function clearTarget(){
      return $this->_clear(2);
    }
    
    /**
     * Get <target> value
     *
     * @return string
     */
    public function getTarget(){
      return $this->_get(2);
    }
    
    /**
     * Set <target> value
     *
     * @param string $value
     * @return \RO\Cmd\ShareDamage
     */
    public function setTarget( $value){
      return $this->_set(2, $value);
    }
  }
}

