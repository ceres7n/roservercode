<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class DonateItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $configid = 0;
    
    /**  @var int */
    public $count = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var int */
    public $itemid = 0;
    
    /**  @var int */
    public $itemcount = 0;
    
    /**  @var int */
    public $contribute = 0;
    
    /**  @var int */
    public $medal = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DonateItem');

      // OPTIONAL UINT32 configid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "configid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 count = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemcount = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "itemcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 contribute = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "contribute";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 medal = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "medal";
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
     * @return \RO\Cmd\DonateItem
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
     * @return \RO\Cmd\DonateItem
     */
    public function setConfigid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <count> has a value
     *
     * @return boolean
     */
    public function hasCount(){
      return $this->_has(2);
    }
    
    /**
     * Clear <count> value
     *
     * @return \RO\Cmd\DonateItem
     */
    public function clearCount(){
      return $this->_clear(2);
    }
    
    /**
     * Get <count> value
     *
     * @return int
     */
    public function getCount(){
      return $this->_get(2);
    }
    
    /**
     * Set <count> value
     *
     * @param int $value
     * @return \RO\Cmd\DonateItem
     */
    public function setCount( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\DonateItem
     */
    public function clearTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\DonateItem
     */
    public function setTime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\DonateItem
     */
    public function clearItemid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(4);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\DonateItem
     */
    public function setItemid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <itemcount> has a value
     *
     * @return boolean
     */
    public function hasItemcount(){
      return $this->_has(5);
    }
    
    /**
     * Clear <itemcount> value
     *
     * @return \RO\Cmd\DonateItem
     */
    public function clearItemcount(){
      return $this->_clear(5);
    }
    
    /**
     * Get <itemcount> value
     *
     * @return int
     */
    public function getItemcount(){
      return $this->_get(5);
    }
    
    /**
     * Set <itemcount> value
     *
     * @param int $value
     * @return \RO\Cmd\DonateItem
     */
    public function setItemcount( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <contribute> has a value
     *
     * @return boolean
     */
    public function hasContribute(){
      return $this->_has(6);
    }
    
    /**
     * Clear <contribute> value
     *
     * @return \RO\Cmd\DonateItem
     */
    public function clearContribute(){
      return $this->_clear(6);
    }
    
    /**
     * Get <contribute> value
     *
     * @return int
     */
    public function getContribute(){
      return $this->_get(6);
    }
    
    /**
     * Set <contribute> value
     *
     * @param int $value
     * @return \RO\Cmd\DonateItem
     */
    public function setContribute( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <medal> has a value
     *
     * @return boolean
     */
    public function hasMedal(){
      return $this->_has(7);
    }
    
    /**
     * Clear <medal> value
     *
     * @return \RO\Cmd\DonateItem
     */
    public function clearMedal(){
      return $this->_clear(7);
    }
    
    /**
     * Get <medal> value
     *
     * @return int
     */
    public function getMedal(){
      return $this->_get(7);
    }
    
    /**
     * Set <medal> value
     *
     * @param int $value
     * @return \RO\Cmd\DonateItem
     */
    public function setMedal( $value){
      return $this->_set(7, $value);
    }
  }
}

