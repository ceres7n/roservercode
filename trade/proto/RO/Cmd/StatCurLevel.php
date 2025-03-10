<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: StatCmd.proto

namespace RO\Cmd {

  class StatCurLevel extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::STAT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\StatParam */
    public $param = \RO\Cmd\StatParam::STAT_CUR_LEVEL;
    
    /**  @var int */
    public $userid = null;
    
    /**  @var int */
    public $last_offlinetime = null;
    
    /**  @var int */
    public $last_baselv = null;
    
    /**  @var int */
    public $last_joblv = null;
    
    /**  @var int */
    public $cur_time = null;
    
    /**  @var int */
    public $cur_baselv = null;
    
    /**  @var int */
    public $cur_joblv = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.StatCurLevel');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::STAT_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\StatParam';
      $f->default   = \RO\Cmd\StatParam::STAT_CUR_LEVEL;
      $descriptor->addField($f);

      // REQUIRED UINT64 userid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "userid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL UINT32 last_offlinetime = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "last_offlinetime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 last_baselv = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "last_baselv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 last_joblv = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "last_joblv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cur_time = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "cur_time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cur_baselv = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "cur_baselv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cur_joblv = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "cur_joblv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <cmd> has a value
     *
     * @return boolean
     */
    public function hasCmd(){
      return $this->_has(1);
    }
    
    /**
     * Clear <cmd> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearCmd(){
      return $this->_clear(1);
    }
    
    /**
     * Get <cmd> value
     *
     * @return int - \RO\Cmd\Command
     */
    public function getCmd(){
      return $this->_get(1);
    }
    
    /**
     * Set <cmd> value
     *
     * @param int - \RO\Cmd\Command $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setCmd( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <param> has a value
     *
     * @return boolean
     */
    public function hasParam(){
      return $this->_has(2);
    }
    
    /**
     * Clear <param> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\StatParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\StatParam $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <userid> has a value
     *
     * @return boolean
     */
    public function hasUserid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <userid> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearUserid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <userid> value
     *
     * @return int
     */
    public function getUserid(){
      return $this->_get(3);
    }
    
    /**
     * Set <userid> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setUserid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <last_offlinetime> has a value
     *
     * @return boolean
     */
    public function hasLastOfflinetime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <last_offlinetime> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearLastOfflinetime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <last_offlinetime> value
     *
     * @return int
     */
    public function getLastOfflinetime(){
      return $this->_get(4);
    }
    
    /**
     * Set <last_offlinetime> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setLastOfflinetime( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <last_baselv> has a value
     *
     * @return boolean
     */
    public function hasLastBaselv(){
      return $this->_has(5);
    }
    
    /**
     * Clear <last_baselv> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearLastBaselv(){
      return $this->_clear(5);
    }
    
    /**
     * Get <last_baselv> value
     *
     * @return int
     */
    public function getLastBaselv(){
      return $this->_get(5);
    }
    
    /**
     * Set <last_baselv> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setLastBaselv( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <last_joblv> has a value
     *
     * @return boolean
     */
    public function hasLastJoblv(){
      return $this->_has(6);
    }
    
    /**
     * Clear <last_joblv> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearLastJoblv(){
      return $this->_clear(6);
    }
    
    /**
     * Get <last_joblv> value
     *
     * @return int
     */
    public function getLastJoblv(){
      return $this->_get(6);
    }
    
    /**
     * Set <last_joblv> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setLastJoblv( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <cur_time> has a value
     *
     * @return boolean
     */
    public function hasCurTime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <cur_time> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearCurTime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <cur_time> value
     *
     * @return int
     */
    public function getCurTime(){
      return $this->_get(7);
    }
    
    /**
     * Set <cur_time> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setCurTime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <cur_baselv> has a value
     *
     * @return boolean
     */
    public function hasCurBaselv(){
      return $this->_has(8);
    }
    
    /**
     * Clear <cur_baselv> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearCurBaselv(){
      return $this->_clear(8);
    }
    
    /**
     * Get <cur_baselv> value
     *
     * @return int
     */
    public function getCurBaselv(){
      return $this->_get(8);
    }
    
    /**
     * Set <cur_baselv> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setCurBaselv( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <cur_joblv> has a value
     *
     * @return boolean
     */
    public function hasCurJoblv(){
      return $this->_has(9);
    }
    
    /**
     * Clear <cur_joblv> value
     *
     * @return \RO\Cmd\StatCurLevel
     */
    public function clearCurJoblv(){
      return $this->_clear(9);
    }
    
    /**
     * Get <cur_joblv> value
     *
     * @return int
     */
    public function getCurJoblv(){
      return $this->_get(9);
    }
    
    /**
     * Set <cur_joblv> value
     *
     * @param int $value
     * @return \RO\Cmd\StatCurLevel
     */
    public function setCurJoblv( $value){
      return $this->_set(9, $value);
    }
  }
}

