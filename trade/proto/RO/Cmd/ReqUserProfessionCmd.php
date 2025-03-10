<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class ReqUserProfessionCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::RECORD_DATA_PROTOCMD;
    
    /**  @var int - \RO\Cmd\RecordParam */
    public $param = \RO\Cmd\RecordParam::RECORDPARAM_USER_PROFESSION;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var int */
    public $accid = null;
    
    /**  @var string */
    public $scenename = null;
    
    /**  @var \RO\Cmd\UserProfessionData[]  */
    public $datas = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ReqUserProfessionCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::RECORD_DATA_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\RecordParam';
      $f->default   = \RO\Cmd\RecordParam::RECORDPARAM_USER_PROFESSION;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 accid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "accid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING scenename = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "scenename";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserProfessionData';
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
     * @return \RO\Cmd\ReqUserProfessionCmd
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
     * @return \RO\Cmd\ReqUserProfessionCmd
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
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\RecordParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\RecordParam $value
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <accid> has a value
     *
     * @return boolean
     */
    public function hasAccid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <accid> value
     *
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function clearAccid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <accid> value
     *
     * @return int
     */
    public function getAccid(){
      return $this->_get(4);
    }
    
    /**
     * Set <accid> value
     *
     * @param int $value
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function setAccid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <scenename> has a value
     *
     * @return boolean
     */
    public function hasScenename(){
      return $this->_has(5);
    }
    
    /**
     * Clear <scenename> value
     *
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function clearScenename(){
      return $this->_clear(5);
    }
    
    /**
     * Get <scenename> value
     *
     * @return string
     */
    public function getScenename(){
      return $this->_get(5);
    }
    
    /**
     * Set <scenename> value
     *
     * @param string $value
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function setScenename( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(6);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function clearDatas(){
      return $this->_clear(6);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserProfessionData
     */
    public function getDatas($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\UserProfessionData $value
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function setDatas(\RO\Cmd\UserProfessionData $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\UserProfessionData[]
     */
    public function getDatasList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\UserProfessionData $value
     * @return \RO\Cmd\ReqUserProfessionCmd
     */
    public function addDatas(\RO\Cmd\UserProfessionData $value){
     return $this->_add(6, $value);
    }
  }
}

