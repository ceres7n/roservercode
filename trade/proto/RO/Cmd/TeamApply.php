<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionTeam.proto

namespace RO\Cmd {

  class TeamApply extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $guid = 0;
    
    /**  @var int */
    public $zoneid = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var string */
    public $name = null;
    
    /**  @var \RO\Cmd\MemberData[]  */
    public $datas = array();
    
    /**  @var int */
    public $accid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TeamApply');

      // OPTIONAL UINT64 guid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 zoneid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "zoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\MemberData';
      $descriptor->addField($f);

      // OPTIONAL UINT32 accid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "accid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\TeamApply
     */
    public function clearGuid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <guid> value
     *
     * @return int
     */
    public function getGuid(){
      return $this->_get(1);
    }
    
    /**
     * Set <guid> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamApply
     */
    public function setGuid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <zoneid> has a value
     *
     * @return boolean
     */
    public function hasZoneid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <zoneid> value
     *
     * @return \RO\Cmd\TeamApply
     */
    public function clearZoneid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <zoneid> value
     *
     * @return int
     */
    public function getZoneid(){
      return $this->_get(5);
    }
    
    /**
     * Set <zoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamApply
     */
    public function setZoneid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\TeamApply
     */
    public function clearTime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(2);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamApply
     */
    public function setTime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\TeamApply
     */
    public function clearName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(3);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\TeamApply
     */
    public function setName( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(4);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\TeamApply
     */
    public function clearDatas(){
      return $this->_clear(4);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\MemberData
     */
    public function getDatas($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\MemberData $value
     * @return \RO\Cmd\TeamApply
     */
    public function setDatas(\RO\Cmd\MemberData $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\MemberData[]
     */
    public function getDatasList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\MemberData $value
     * @return \RO\Cmd\TeamApply
     */
    public function addDatas(\RO\Cmd\MemberData $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <accid> has a value
     *
     * @return boolean
     */
    public function hasAccid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <accid> value
     *
     * @return \RO\Cmd\TeamApply
     */
    public function clearAccid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <accid> value
     *
     * @return int
     */
    public function getAccid(){
      return $this->_get(6);
    }
    
    /**
     * Set <accid> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamApply
     */
    public function setAccid( $value){
      return $this->_set(6, $value);
    }
  }
}

