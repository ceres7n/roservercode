<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class PetAdventureLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::PET_ADVENTURE_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var string */
    public $account = null;
    
    /**  @var int */
    public $pid = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $eid = null;
    
    /**  @var int */
    public $etype = null;
    
    /**  @var int - \RO\Cmd\EPetAdventureLogType */
    public $type = null;
    
    /**  @var int */
    public $id = null;
    
    /**  @var string */
    public $names = null;
    
    /**  @var int */
    public $cond = null;
    
    /**  @var string */
    public $logid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PetAdventureLogCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::LOG_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\LogParam';
      $f->default   = \RO\Cmd\LogParam::PET_ADVENTURE_LOG_CMD;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "cid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING account = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 pid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 eid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "eid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 etype = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EPetAdventureLogType';
      $descriptor->addField($f);

      // OPTIONAL UINT32 id = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING names = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "names";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cond = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "cond";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "logid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
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
     * @return \RO\Cmd\PetAdventureLogCmd
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
     * @return \RO\Cmd\PetAdventureLogCmd
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
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\LogParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\LogParam $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <cid> has a value
     *
     * @return boolean
     */
    public function hasCid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <cid> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearCid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <cid> value
     *
     * @return int
     */
    public function getCid(){
      return $this->_get(3);
    }
    
    /**
     * Set <cid> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setCid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sid> has a value
     *
     * @return boolean
     */
    public function hasSid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sid> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearSid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sid> value
     *
     * @return int
     */
    public function getSid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sid> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setSid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <account> has a value
     *
     * @return boolean
     */
    public function hasAccount(){
      return $this->_has(13);
    }
    
    /**
     * Clear <account> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearAccount(){
      return $this->_clear(13);
    }
    
    /**
     * Get <account> value
     *
     * @return string
     */
    public function getAccount(){
      return $this->_get(13);
    }
    
    /**
     * Set <account> value
     *
     * @param string $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setAccount( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <pid> has a value
     *
     * @return boolean
     */
    public function hasPid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <pid> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearPid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <pid> value
     *
     * @return int
     */
    public function getPid(){
      return $this->_get(5);
    }
    
    /**
     * Set <pid> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setPid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearTime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(6);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setTime( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <eid> has a value
     *
     * @return boolean
     */
    public function hasEid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <eid> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearEid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <eid> value
     *
     * @return int
     */
    public function getEid(){
      return $this->_get(7);
    }
    
    /**
     * Set <eid> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setEid( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(8);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearEtype(){
      return $this->_clear(8);
    }
    
    /**
     * Get <etype> value
     *
     * @return int
     */
    public function getEtype(){
      return $this->_get(8);
    }
    
    /**
     * Set <etype> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setEtype( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(9);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearType(){
      return $this->_clear(9);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EPetAdventureLogType
     */
    public function getType(){
      return $this->_get(9);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EPetAdventureLogType $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setType( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(10);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearId(){
      return $this->_clear(10);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(10);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setId( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <names> has a value
     *
     * @return boolean
     */
    public function hasNames(){
      return $this->_has(11);
    }
    
    /**
     * Clear <names> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearNames(){
      return $this->_clear(11);
    }
    
    /**
     * Get <names> value
     *
     * @return string
     */
    public function getNames(){
      return $this->_get(11);
    }
    
    /**
     * Set <names> value
     *
     * @param string $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setNames( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <cond> has a value
     *
     * @return boolean
     */
    public function hasCond(){
      return $this->_has(12);
    }
    
    /**
     * Clear <cond> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearCond(){
      return $this->_clear(12);
    }
    
    /**
     * Get <cond> value
     *
     * @return int
     */
    public function getCond(){
      return $this->_get(12);
    }
    
    /**
     * Set <cond> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setCond( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <logid> has a value
     *
     * @return boolean
     */
    public function hasLogid(){
      return $this->_has(14);
    }
    
    /**
     * Clear <logid> value
     *
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function clearLogid(){
      return $this->_clear(14);
    }
    
    /**
     * Get <logid> value
     *
     * @return string
     */
    public function getLogid(){
      return $this->_get(14);
    }
    
    /**
     * Set <logid> value
     *
     * @param string $value
     * @return \RO\Cmd\PetAdventureLogCmd
     */
    public function setLogid( $value){
      return $this->_set(14, $value);
    }
  }
}

