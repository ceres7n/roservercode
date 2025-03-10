<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobQuest extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\QuestData[]  */
    public $accept = array();
    
    /**  @var \RO\Cmd\QuestData[]  */
    public $submit = array();
    
    /**  @var \RO\Cmd\QuestDetail[]  */
    public $detail = array();
    
    /**  @var int */
    public $dailycount = 0;
    
    /**  @var int */
    public $dailytcount = 0;
    
    /**  @var int */
    public $dailyexp = 0;
    
    /**  @var int */
    public $dailylevel = 0;
    
    /**  @var int[]  */
    public $dailygift = array();
    
    /**  @var int */
    public $lastcalcdailycounttime = 0;
    
    /**  @var \RO\Cmd\MapQuest[]  */
    public $mapquest = array();
    
    /**  @var \RO\Cmd\MapQuest[]  */
    public $maprandquest = array();
    
    /**  @var int[]  */
    public $varreward = array();
    
    /**  @var int[]  */
    public $forbidquest = array();
    
    /**  @var int[]  */
    public $process_acc = array();
    
    /**  @var \RO\Cmd\BlobQuestPuzzle */
    public $puzzle = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobQuest');

      // REPEATED MESSAGE accept = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "accept";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestData';
      $descriptor->addField($f);

      // REPEATED MESSAGE submit = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "submit";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestData';
      $descriptor->addField($f);

      // REPEATED MESSAGE detail = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "detail";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestDetail';
      $descriptor->addField($f);

      // OPTIONAL UINT32 dailycount = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "dailycount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dailytcount = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "dailytcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dailyexp = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "dailyexp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dailylevel = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "dailylevel";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED UINT32 dailygift = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "dailygift";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT32 lastcalcdailycounttime = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "lastcalcdailycounttime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE mapquest = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "mapquest";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\MapQuest';
      $descriptor->addField($f);

      // REPEATED MESSAGE maprandquest = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "maprandquest";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\MapQuest';
      $descriptor->addField($f);

      // REPEATED UINT32 varreward = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "varreward";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED UINT32 forbidquest = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "forbidquest";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED UINT32 process_acc = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "process_acc";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE puzzle = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "puzzle";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\BlobQuestPuzzle';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <accept> has a value
     *
     * @return boolean
     */
    public function hasAccept(){
      return $this->_has(1);
    }
    
    /**
     * Clear <accept> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearAccept(){
      return $this->_clear(1);
    }
    
    /**
     * Get <accept> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestData
     */
    public function getAccept($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <accept> value
     *
     * @param \RO\Cmd\QuestData $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setAccept(\RO\Cmd\QuestData $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <accept>
     *
     * @return \RO\Cmd\QuestData[]
     */
    public function getAcceptList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <accept>
     *
     * @param \RO\Cmd\QuestData $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addAccept(\RO\Cmd\QuestData $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <submit> has a value
     *
     * @return boolean
     */
    public function hasSubmit(){
      return $this->_has(2);
    }
    
    /**
     * Clear <submit> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearSubmit(){
      return $this->_clear(2);
    }
    
    /**
     * Get <submit> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestData
     */
    public function getSubmit($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <submit> value
     *
     * @param \RO\Cmd\QuestData $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setSubmit(\RO\Cmd\QuestData $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <submit>
     *
     * @return \RO\Cmd\QuestData[]
     */
    public function getSubmitList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <submit>
     *
     * @param \RO\Cmd\QuestData $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addSubmit(\RO\Cmd\QuestData $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <detail> has a value
     *
     * @return boolean
     */
    public function hasDetail(){
      return $this->_has(3);
    }
    
    /**
     * Clear <detail> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearDetail(){
      return $this->_clear(3);
    }
    
    /**
     * Get <detail> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestDetail
     */
    public function getDetail($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <detail> value
     *
     * @param \RO\Cmd\QuestDetail $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setDetail(\RO\Cmd\QuestDetail $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <detail>
     *
     * @return \RO\Cmd\QuestDetail[]
     */
    public function getDetailList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <detail>
     *
     * @param \RO\Cmd\QuestDetail $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addDetail(\RO\Cmd\QuestDetail $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <dailycount> has a value
     *
     * @return boolean
     */
    public function hasDailycount(){
      return $this->_has(4);
    }
    
    /**
     * Clear <dailycount> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearDailycount(){
      return $this->_clear(4);
    }
    
    /**
     * Get <dailycount> value
     *
     * @return int
     */
    public function getDailycount(){
      return $this->_get(4);
    }
    
    /**
     * Set <dailycount> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setDailycount( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <dailytcount> has a value
     *
     * @return boolean
     */
    public function hasDailytcount(){
      return $this->_has(5);
    }
    
    /**
     * Clear <dailytcount> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearDailytcount(){
      return $this->_clear(5);
    }
    
    /**
     * Get <dailytcount> value
     *
     * @return int
     */
    public function getDailytcount(){
      return $this->_get(5);
    }
    
    /**
     * Set <dailytcount> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setDailytcount( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <dailyexp> has a value
     *
     * @return boolean
     */
    public function hasDailyexp(){
      return $this->_has(6);
    }
    
    /**
     * Clear <dailyexp> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearDailyexp(){
      return $this->_clear(6);
    }
    
    /**
     * Get <dailyexp> value
     *
     * @return int
     */
    public function getDailyexp(){
      return $this->_get(6);
    }
    
    /**
     * Set <dailyexp> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setDailyexp( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <dailylevel> has a value
     *
     * @return boolean
     */
    public function hasDailylevel(){
      return $this->_has(7);
    }
    
    /**
     * Clear <dailylevel> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearDailylevel(){
      return $this->_clear(7);
    }
    
    /**
     * Get <dailylevel> value
     *
     * @return int
     */
    public function getDailylevel(){
      return $this->_get(7);
    }
    
    /**
     * Set <dailylevel> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setDailylevel( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <dailygift> has a value
     *
     * @return boolean
     */
    public function hasDailygift(){
      return $this->_has(8);
    }
    
    /**
     * Clear <dailygift> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearDailygift(){
      return $this->_clear(8);
    }
    
    /**
     * Get <dailygift> value
     *
     * @param int $idx
     * @return int
     */
    public function getDailygift($idx = NULL){
      return $this->_get(8, $idx);
    }
    
    /**
     * Set <dailygift> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setDailygift( $value, $idx = NULL){
      return $this->_set(8, $value, $idx);
    }
    
    /**
     * Get all elements of <dailygift>
     *
     * @return int[]
     */
    public function getDailygiftList(){
     return $this->_get(8);
    }
    
    /**
     * Add a new element to <dailygift>
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addDailygift( $value){
     return $this->_add(8, $value);
    }
    
    /**
     * Check if <lastcalcdailycounttime> has a value
     *
     * @return boolean
     */
    public function hasLastcalcdailycounttime(){
      return $this->_has(9);
    }
    
    /**
     * Clear <lastcalcdailycounttime> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearLastcalcdailycounttime(){
      return $this->_clear(9);
    }
    
    /**
     * Get <lastcalcdailycounttime> value
     *
     * @return int
     */
    public function getLastcalcdailycounttime(){
      return $this->_get(9);
    }
    
    /**
     * Set <lastcalcdailycounttime> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setLastcalcdailycounttime( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <mapquest> has a value
     *
     * @return boolean
     */
    public function hasMapquest(){
      return $this->_has(10);
    }
    
    /**
     * Clear <mapquest> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearMapquest(){
      return $this->_clear(10);
    }
    
    /**
     * Get <mapquest> value
     *
     * @param int $idx
     * @return \RO\Cmd\MapQuest
     */
    public function getMapquest($idx = NULL){
      return $this->_get(10, $idx);
    }
    
    /**
     * Set <mapquest> value
     *
     * @param \RO\Cmd\MapQuest $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setMapquest(\RO\Cmd\MapQuest $value, $idx = NULL){
      return $this->_set(10, $value, $idx);
    }
    
    /**
     * Get all elements of <mapquest>
     *
     * @return \RO\Cmd\MapQuest[]
     */
    public function getMapquestList(){
     return $this->_get(10);
    }
    
    /**
     * Add a new element to <mapquest>
     *
     * @param \RO\Cmd\MapQuest $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addMapquest(\RO\Cmd\MapQuest $value){
     return $this->_add(10, $value);
    }
    
    /**
     * Check if <maprandquest> has a value
     *
     * @return boolean
     */
    public function hasMaprandquest(){
      return $this->_has(14);
    }
    
    /**
     * Clear <maprandquest> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearMaprandquest(){
      return $this->_clear(14);
    }
    
    /**
     * Get <maprandquest> value
     *
     * @param int $idx
     * @return \RO\Cmd\MapQuest
     */
    public function getMaprandquest($idx = NULL){
      return $this->_get(14, $idx);
    }
    
    /**
     * Set <maprandquest> value
     *
     * @param \RO\Cmd\MapQuest $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setMaprandquest(\RO\Cmd\MapQuest $value, $idx = NULL){
      return $this->_set(14, $value, $idx);
    }
    
    /**
     * Get all elements of <maprandquest>
     *
     * @return \RO\Cmd\MapQuest[]
     */
    public function getMaprandquestList(){
     return $this->_get(14);
    }
    
    /**
     * Add a new element to <maprandquest>
     *
     * @param \RO\Cmd\MapQuest $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addMaprandquest(\RO\Cmd\MapQuest $value){
     return $this->_add(14, $value);
    }
    
    /**
     * Check if <varreward> has a value
     *
     * @return boolean
     */
    public function hasVarreward(){
      return $this->_has(11);
    }
    
    /**
     * Clear <varreward> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearVarreward(){
      return $this->_clear(11);
    }
    
    /**
     * Get <varreward> value
     *
     * @param int $idx
     * @return int
     */
    public function getVarreward($idx = NULL){
      return $this->_get(11, $idx);
    }
    
    /**
     * Set <varreward> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setVarreward( $value, $idx = NULL){
      return $this->_set(11, $value, $idx);
    }
    
    /**
     * Get all elements of <varreward>
     *
     * @return int[]
     */
    public function getVarrewardList(){
     return $this->_get(11);
    }
    
    /**
     * Add a new element to <varreward>
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addVarreward( $value){
     return $this->_add(11, $value);
    }
    
    /**
     * Check if <forbidquest> has a value
     *
     * @return boolean
     */
    public function hasForbidquest(){
      return $this->_has(12);
    }
    
    /**
     * Clear <forbidquest> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearForbidquest(){
      return $this->_clear(12);
    }
    
    /**
     * Get <forbidquest> value
     *
     * @param int $idx
     * @return int
     */
    public function getForbidquest($idx = NULL){
      return $this->_get(12, $idx);
    }
    
    /**
     * Set <forbidquest> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setForbidquest( $value, $idx = NULL){
      return $this->_set(12, $value, $idx);
    }
    
    /**
     * Get all elements of <forbidquest>
     *
     * @return int[]
     */
    public function getForbidquestList(){
     return $this->_get(12);
    }
    
    /**
     * Add a new element to <forbidquest>
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addForbidquest( $value){
     return $this->_add(12, $value);
    }
    
    /**
     * Check if <process_acc> has a value
     *
     * @return boolean
     */
    public function hasProcessAcc(){
      return $this->_has(13);
    }
    
    /**
     * Clear <process_acc> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearProcessAcc(){
      return $this->_clear(13);
    }
    
    /**
     * Get <process_acc> value
     *
     * @param int $idx
     * @return int
     */
    public function getProcessAcc($idx = NULL){
      return $this->_get(13, $idx);
    }
    
    /**
     * Set <process_acc> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setProcessAcc( $value, $idx = NULL){
      return $this->_set(13, $value, $idx);
    }
    
    /**
     * Get all elements of <process_acc>
     *
     * @return int[]
     */
    public function getProcessAccList(){
     return $this->_get(13);
    }
    
    /**
     * Add a new element to <process_acc>
     *
     * @param int $value
     * @return \RO\Cmd\BlobQuest
     */
    public function addProcessAcc( $value){
     return $this->_add(13, $value);
    }
    
    /**
     * Check if <puzzle> has a value
     *
     * @return boolean
     */
    public function hasPuzzle(){
      return $this->_has(15);
    }
    
    /**
     * Clear <puzzle> value
     *
     * @return \RO\Cmd\BlobQuest
     */
    public function clearPuzzle(){
      return $this->_clear(15);
    }
    
    /**
     * Get <puzzle> value
     *
     * @return \RO\Cmd\BlobQuestPuzzle
     */
    public function getPuzzle(){
      return $this->_get(15);
    }
    
    /**
     * Set <puzzle> value
     *
     * @param \RO\Cmd\BlobQuestPuzzle $value
     * @return \RO\Cmd\BlobQuest
     */
    public function setPuzzle(\RO\Cmd\BlobQuestPuzzle $value){
      return $this->_set(15, $value);
    }
  }
}

