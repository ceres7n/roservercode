<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class KillLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::KILL_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var int */
    public $hid = null;
    
    /**  @var string */
    public $account = null;
    
    /**  @var int */
    public $pid = null;
    
    /**  @var int */
    public $ispay = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $eid = null;
    
    /**  @var int */
    public $etype = null;
    
    /**  @var int */
    public $monsterid = null;
    
    /**  @var int */
    public $monstergid = null;
    
    /**  @var int */
    public $monstergroup = null;
    
    /**  @var int */
    public $baseexp = null;
    
    /**  @var int */
    public $jobexp = null;
    
    /**  @var int */
    public $ismvp = null;
    
    /**  @var int[]  */
    public $mark = array();
    
    /**  @var int */
    public $type = null;
    
    /**  @var int */
    public $level = null;
    
    /**  @var int */
    public $killtype = null;
    
    /**  @var string */
    public $logid = null;
    
    /**  @var int */
    public $lineid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.KillLogCmd');

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
      $f->default   = \RO\Cmd\LogParam::KILL_LOG_CMD;
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

      // OPTIONAL UINT32 hid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "hid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING account = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 pid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ispay = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "ispay";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 eid = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "eid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 etype = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 monsterid = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "monsterid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 monstergid = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "monstergid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 monstergroup = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "monstergroup";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 baseexp = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "baseexp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 jobexp = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "jobexp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 ismvp = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "ismvp";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED UINT32 mark = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "mark";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT32 type = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 level = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "level";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 killtype = 21
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 21;
      $f->name      = "killtype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 22
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 22;
      $f->name      = "logid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 lineid = 23
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 23;
      $f->name      = "lineid";
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
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
     * @return \RO\Cmd\KillLogCmd
     */
    public function setSid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <hid> has a value
     *
     * @return boolean
     */
    public function hasHid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <hid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearHid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <hid> value
     *
     * @return int
     */
    public function getHid(){
      return $this->_get(5);
    }
    
    /**
     * Set <hid> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setHid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <account> has a value
     *
     * @return boolean
     */
    public function hasAccount(){
      return $this->_has(6);
    }
    
    /**
     * Clear <account> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearAccount(){
      return $this->_clear(6);
    }
    
    /**
     * Get <account> value
     *
     * @return string
     */
    public function getAccount(){
      return $this->_get(6);
    }
    
    /**
     * Set <account> value
     *
     * @param string $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setAccount( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <pid> has a value
     *
     * @return boolean
     */
    public function hasPid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <pid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearPid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <pid> value
     *
     * @return int
     */
    public function getPid(){
      return $this->_get(7);
    }
    
    /**
     * Set <pid> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setPid( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <ispay> has a value
     *
     * @return boolean
     */
    public function hasIspay(){
      return $this->_has(8);
    }
    
    /**
     * Clear <ispay> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearIspay(){
      return $this->_clear(8);
    }
    
    /**
     * Get <ispay> value
     *
     * @return int
     */
    public function getIspay(){
      return $this->_get(8);
    }
    
    /**
     * Set <ispay> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setIspay( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(9);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearTime(){
      return $this->_clear(9);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(9);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setTime( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <eid> has a value
     *
     * @return boolean
     */
    public function hasEid(){
      return $this->_has(10);
    }
    
    /**
     * Clear <eid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearEid(){
      return $this->_clear(10);
    }
    
    /**
     * Get <eid> value
     *
     * @return int
     */
    public function getEid(){
      return $this->_get(10);
    }
    
    /**
     * Set <eid> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setEid( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(11);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearEtype(){
      return $this->_clear(11);
    }
    
    /**
     * Get <etype> value
     *
     * @return int
     */
    public function getEtype(){
      return $this->_get(11);
    }
    
    /**
     * Set <etype> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setEtype( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <monsterid> has a value
     *
     * @return boolean
     */
    public function hasMonsterid(){
      return $this->_has(12);
    }
    
    /**
     * Clear <monsterid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearMonsterid(){
      return $this->_clear(12);
    }
    
    /**
     * Get <monsterid> value
     *
     * @return int
     */
    public function getMonsterid(){
      return $this->_get(12);
    }
    
    /**
     * Set <monsterid> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setMonsterid( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <monstergid> has a value
     *
     * @return boolean
     */
    public function hasMonstergid(){
      return $this->_has(13);
    }
    
    /**
     * Clear <monstergid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearMonstergid(){
      return $this->_clear(13);
    }
    
    /**
     * Get <monstergid> value
     *
     * @return int
     */
    public function getMonstergid(){
      return $this->_get(13);
    }
    
    /**
     * Set <monstergid> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setMonstergid( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <monstergroup> has a value
     *
     * @return boolean
     */
    public function hasMonstergroup(){
      return $this->_has(14);
    }
    
    /**
     * Clear <monstergroup> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearMonstergroup(){
      return $this->_clear(14);
    }
    
    /**
     * Get <monstergroup> value
     *
     * @return int
     */
    public function getMonstergroup(){
      return $this->_get(14);
    }
    
    /**
     * Set <monstergroup> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setMonstergroup( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <baseexp> has a value
     *
     * @return boolean
     */
    public function hasBaseexp(){
      return $this->_has(15);
    }
    
    /**
     * Clear <baseexp> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearBaseexp(){
      return $this->_clear(15);
    }
    
    /**
     * Get <baseexp> value
     *
     * @return int
     */
    public function getBaseexp(){
      return $this->_get(15);
    }
    
    /**
     * Set <baseexp> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setBaseexp( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <jobexp> has a value
     *
     * @return boolean
     */
    public function hasJobexp(){
      return $this->_has(16);
    }
    
    /**
     * Clear <jobexp> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearJobexp(){
      return $this->_clear(16);
    }
    
    /**
     * Get <jobexp> value
     *
     * @return int
     */
    public function getJobexp(){
      return $this->_get(16);
    }
    
    /**
     * Set <jobexp> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setJobexp( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <ismvp> has a value
     *
     * @return boolean
     */
    public function hasIsmvp(){
      return $this->_has(17);
    }
    
    /**
     * Clear <ismvp> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearIsmvp(){
      return $this->_clear(17);
    }
    
    /**
     * Get <ismvp> value
     *
     * @return int
     */
    public function getIsmvp(){
      return $this->_get(17);
    }
    
    /**
     * Set <ismvp> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setIsmvp( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <mark> has a value
     *
     * @return boolean
     */
    public function hasMark(){
      return $this->_has(18);
    }
    
    /**
     * Clear <mark> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearMark(){
      return $this->_clear(18);
    }
    
    /**
     * Get <mark> value
     *
     * @param int $idx
     * @return int
     */
    public function getMark($idx = NULL){
      return $this->_get(18, $idx);
    }
    
    /**
     * Set <mark> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setMark( $value, $idx = NULL){
      return $this->_set(18, $value, $idx);
    }
    
    /**
     * Get all elements of <mark>
     *
     * @return int[]
     */
    public function getMarkList(){
     return $this->_get(18);
    }
    
    /**
     * Add a new element to <mark>
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function addMark( $value){
     return $this->_add(18, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(19);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearType(){
      return $this->_clear(19);
    }
    
    /**
     * Get <type> value
     *
     * @return int
     */
    public function getType(){
      return $this->_get(19);
    }
    
    /**
     * Set <type> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setType( $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <level> has a value
     *
     * @return boolean
     */
    public function hasLevel(){
      return $this->_has(20);
    }
    
    /**
     * Clear <level> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearLevel(){
      return $this->_clear(20);
    }
    
    /**
     * Get <level> value
     *
     * @return int
     */
    public function getLevel(){
      return $this->_get(20);
    }
    
    /**
     * Set <level> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setLevel( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <killtype> has a value
     *
     * @return boolean
     */
    public function hasKilltype(){
      return $this->_has(21);
    }
    
    /**
     * Clear <killtype> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearKilltype(){
      return $this->_clear(21);
    }
    
    /**
     * Get <killtype> value
     *
     * @return int
     */
    public function getKilltype(){
      return $this->_get(21);
    }
    
    /**
     * Set <killtype> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setKilltype( $value){
      return $this->_set(21, $value);
    }
    
    /**
     * Check if <logid> has a value
     *
     * @return boolean
     */
    public function hasLogid(){
      return $this->_has(22);
    }
    
    /**
     * Clear <logid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearLogid(){
      return $this->_clear(22);
    }
    
    /**
     * Get <logid> value
     *
     * @return string
     */
    public function getLogid(){
      return $this->_get(22);
    }
    
    /**
     * Set <logid> value
     *
     * @param string $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setLogid( $value){
      return $this->_set(22, $value);
    }
    
    /**
     * Check if <lineid> has a value
     *
     * @return boolean
     */
    public function hasLineid(){
      return $this->_has(23);
    }
    
    /**
     * Clear <lineid> value
     *
     * @return \RO\Cmd\KillLogCmd
     */
    public function clearLineid(){
      return $this->_clear(23);
    }
    
    /**
     * Get <lineid> value
     *
     * @return int
     */
    public function getLineid(){
      return $this->_get(23);
    }
    
    /**
     * Set <lineid> value
     *
     * @param int $value
     * @return \RO\Cmd\KillLogCmd
     */
    public function setLineid( $value){
      return $this->_set(23, $value);
    }
  }
}

