<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class FavorabilityStatus extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $favorability = 0;
    
    /**  @var int */
    public $status = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FavorabilityStatus');

      // OPTIONAL UINT32 favorability = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "favorability";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 status = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "status";
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
     * Check if <favorability> has a value
     *
     * @return boolean
     */
    public function hasFavorability(){
      return $this->_has(1);
    }
    
    /**
     * Clear <favorability> value
     *
     * @return \RO\Cmd\FavorabilityStatus
     */
    public function clearFavorability(){
      return $this->_clear(1);
    }
    
    /**
     * Get <favorability> value
     *
     * @return int
     */
    public function getFavorability(){
      return $this->_get(1);
    }
    
    /**
     * Set <favorability> value
     *
     * @param int $value
     * @return \RO\Cmd\FavorabilityStatus
     */
    public function setFavorability( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(2);
    }
    
    /**
     * Clear <status> value
     *
     * @return \RO\Cmd\FavorabilityStatus
     */
    public function clearStatus(){
      return $this->_clear(2);
    }
    
    /**
     * Get <status> value
     *
     * @return int
     */
    public function getStatus(){
      return $this->_get(2);
    }
    
    /**
     * Set <status> value
     *
     * @param int $value
     * @return \RO\Cmd\FavorabilityStatus
     */
    public function setStatus( $value){
      return $this->_set(2, $value);
    }
  }
}

