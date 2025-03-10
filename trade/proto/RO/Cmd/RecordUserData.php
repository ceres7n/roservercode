<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class RecordUserData extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\UserBaseData */
    public $base = null;
    
    /**  @var \RO\Cmd\RedisUserData */
    public $redis = null;
    
    /**  @var string */
    public $acc_data = null;
    
    /**  @var string */
    public $char_data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.RecordUserData');

      // OPTIONAL MESSAGE base = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "base";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\UserBaseData';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE redis = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "redis";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\RedisUserData';
      $descriptor->addField($f);

      // OPTIONAL BYTES acc_data = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "acc_data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BYTES char_data = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "char_data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <base> has a value
     *
     * @return boolean
     */
    public function hasBase(){
      return $this->_has(1);
    }
    
    /**
     * Clear <base> value
     *
     * @return \RO\Cmd\RecordUserData
     */
    public function clearBase(){
      return $this->_clear(1);
    }
    
    /**
     * Get <base> value
     *
     * @return \RO\Cmd\UserBaseData
     */
    public function getBase(){
      return $this->_get(1);
    }
    
    /**
     * Set <base> value
     *
     * @param \RO\Cmd\UserBaseData $value
     * @return \RO\Cmd\RecordUserData
     */
    public function setBase(\RO\Cmd\UserBaseData $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <redis> has a value
     *
     * @return boolean
     */
    public function hasRedis(){
      return $this->_has(2);
    }
    
    /**
     * Clear <redis> value
     *
     * @return \RO\Cmd\RecordUserData
     */
    public function clearRedis(){
      return $this->_clear(2);
    }
    
    /**
     * Get <redis> value
     *
     * @return \RO\Cmd\RedisUserData
     */
    public function getRedis(){
      return $this->_get(2);
    }
    
    /**
     * Set <redis> value
     *
     * @param \RO\Cmd\RedisUserData $value
     * @return \RO\Cmd\RecordUserData
     */
    public function setRedis(\RO\Cmd\RedisUserData $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <acc_data> has a value
     *
     * @return boolean
     */
    public function hasAccData(){
      return $this->_has(3);
    }
    
    /**
     * Clear <acc_data> value
     *
     * @return \RO\Cmd\RecordUserData
     */
    public function clearAccData(){
      return $this->_clear(3);
    }
    
    /**
     * Get <acc_data> value
     *
     * @return string
     */
    public function getAccData(){
      return $this->_get(3);
    }
    
    /**
     * Set <acc_data> value
     *
     * @param string $value
     * @return \RO\Cmd\RecordUserData
     */
    public function setAccData( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <char_data> has a value
     *
     * @return boolean
     */
    public function hasCharData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <char_data> value
     *
     * @return \RO\Cmd\RecordUserData
     */
    public function clearCharData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <char_data> value
     *
     * @return string
     */
    public function getCharData(){
      return $this->_get(4);
    }
    
    /**
     * Set <char_data> value
     *
     * @param string $value
     * @return \RO\Cmd\RecordUserData
     */
    public function setCharData( $value){
      return $this->_set(4, $value);
    }
  }
}

