<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class WorkSpace extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $starttime = 0;
    
    /**  @var int */
    public $lastrewardtime = 0;
    
    /**  @var boolean */
    public $unlock = false;
    
    /**  @var int - \RO\Cmd\EWorkState */
    public $state = \RO\Cmd\EWorkState::EWORKSTATE_MIN;
    
    /**  @var \RO\Cmd\ItemData[]  */
    public $datas = array();
    
    /**  @var int[]  */
    public $counts = array();
    
    /**  @var int[]  */
    public $last_counts = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.WorkSpace');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 starttime = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "starttime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 lastrewardtime = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "lastrewardtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL unlock = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unlock";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL ENUM state = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "state";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EWorkState';
      $f->default   = \RO\Cmd\EWorkState::EWORKSTATE_MIN;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ItemData';
      $descriptor->addField($f);

      // REPEATED UINT32 counts = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "counts";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED UINT32 last_counts = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "last_counts";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <starttime> has a value
     *
     * @return boolean
     */
    public function hasStarttime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <starttime> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearStarttime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <starttime> value
     *
     * @return int
     */
    public function getStarttime(){
      return $this->_get(2);
    }
    
    /**
     * Set <starttime> value
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setStarttime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <lastrewardtime> has a value
     *
     * @return boolean
     */
    public function hasLastrewardtime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <lastrewardtime> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearLastrewardtime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <lastrewardtime> value
     *
     * @return int
     */
    public function getLastrewardtime(){
      return $this->_get(7);
    }
    
    /**
     * Set <lastrewardtime> value
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setLastrewardtime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <unlock> has a value
     *
     * @return boolean
     */
    public function hasUnlock(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unlock> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearUnlock(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unlock> value
     *
     * @return boolean
     */
    public function getUnlock(){
      return $this->_get(3);
    }
    
    /**
     * Set <unlock> value
     *
     * @param boolean $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setUnlock( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <state> has a value
     *
     * @return boolean
     */
    public function hasState(){
      return $this->_has(4);
    }
    
    /**
     * Clear <state> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearState(){
      return $this->_clear(4);
    }
    
    /**
     * Get <state> value
     *
     * @return int - \RO\Cmd\EWorkState
     */
    public function getState(){
      return $this->_get(4);
    }
    
    /**
     * Set <state> value
     *
     * @param int - \RO\Cmd\EWorkState $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setState( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(5);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearDatas(){
      return $this->_clear(5);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\ItemData
     */
    public function getDatas($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setDatas(\RO\Cmd\ItemData $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\ItemData[]
     */
    public function getDatasList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\WorkSpace
     */
    public function addDatas(\RO\Cmd\ItemData $value){
     return $this->_add(5, $value);
    }
    
    /**
     * Check if <counts> has a value
     *
     * @return boolean
     */
    public function hasCounts(){
      return $this->_has(6);
    }
    
    /**
     * Clear <counts> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearCounts(){
      return $this->_clear(6);
    }
    
    /**
     * Get <counts> value
     *
     * @param int $idx
     * @return int
     */
    public function getCounts($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <counts> value
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setCounts( $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <counts>
     *
     * @return int[]
     */
    public function getCountsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <counts>
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function addCounts( $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <last_counts> has a value
     *
     * @return boolean
     */
    public function hasLastCounts(){
      return $this->_has(8);
    }
    
    /**
     * Clear <last_counts> value
     *
     * @return \RO\Cmd\WorkSpace
     */
    public function clearLastCounts(){
      return $this->_clear(8);
    }
    
    /**
     * Get <last_counts> value
     *
     * @param int $idx
     * @return int
     */
    public function getLastCounts($idx = NULL){
      return $this->_get(8, $idx);
    }
    
    /**
     * Set <last_counts> value
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function setLastCounts( $value, $idx = NULL){
      return $this->_set(8, $value, $idx);
    }
    
    /**
     * Get all elements of <last_counts>
     *
     * @return int[]
     */
    public function getLastCountsList(){
     return $this->_get(8);
    }
    
    /**
     * Add a new element to <last_counts>
     *
     * @param int $value
     * @return \RO\Cmd\WorkSpace
     */
    public function addLastCounts( $value){
     return $this->_add(8, $value);
    }
  }
}

