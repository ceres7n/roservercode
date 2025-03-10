<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionTeam.proto

namespace RO\Cmd {

  class TeamData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $guid = 0;
    
    /**  @var int */
    public $zoneid = 0;
    
    /**  @var string */
    public $name = null;
    
    /**  @var \RO\Cmd\TeamSummaryItem[]  */
    public $items = array();
    
    /**  @var \RO\Cmd\TeamMember[]  */
    public $members = array();
    
    /**  @var \RO\Cmd\TeamApply[]  */
    public $applys = array();
    
    /**  @var \RO\Cmd\TeamSealData */
    public $seal = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TeamData');

      // OPTIONAL UINT64 guid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 zoneid = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "zoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\TeamSummaryItem';
      $descriptor->addField($f);

      // REPEATED MESSAGE members = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "members";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\TeamMember';
      $descriptor->addField($f);

      // REPEATED MESSAGE applys = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "applys";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\TeamApply';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE seal = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "seal";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\TeamSealData';
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
     * @return \RO\Cmd\TeamData
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
     * @return \RO\Cmd\TeamData
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
      return $this->_has(8);
    }
    
    /**
     * Clear <zoneid> value
     *
     * @return \RO\Cmd\TeamData
     */
    public function clearZoneid(){
      return $this->_clear(8);
    }
    
    /**
     * Get <zoneid> value
     *
     * @return int
     */
    public function getZoneid(){
      return $this->_get(8);
    }
    
    /**
     * Set <zoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamData
     */
    public function setZoneid( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\TeamData
     */
    public function clearName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(2);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\TeamData
     */
    public function setName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <items> has a value
     *
     * @return boolean
     */
    public function hasItems(){
      return $this->_has(3);
    }
    
    /**
     * Clear <items> value
     *
     * @return \RO\Cmd\TeamData
     */
    public function clearItems(){
      return $this->_clear(3);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\TeamSummaryItem
     */
    public function getItems($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\TeamSummaryItem $value
     * @return \RO\Cmd\TeamData
     */
    public function setItems(\RO\Cmd\TeamSummaryItem $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\TeamSummaryItem[]
     */
    public function getItemsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\TeamSummaryItem $value
     * @return \RO\Cmd\TeamData
     */
    public function addItems(\RO\Cmd\TeamSummaryItem $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <members> has a value
     *
     * @return boolean
     */
    public function hasMembers(){
      return $this->_has(4);
    }
    
    /**
     * Clear <members> value
     *
     * @return \RO\Cmd\TeamData
     */
    public function clearMembers(){
      return $this->_clear(4);
    }
    
    /**
     * Get <members> value
     *
     * @param int $idx
     * @return \RO\Cmd\TeamMember
     */
    public function getMembers($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <members> value
     *
     * @param \RO\Cmd\TeamMember $value
     * @return \RO\Cmd\TeamData
     */
    public function setMembers(\RO\Cmd\TeamMember $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <members>
     *
     * @return \RO\Cmd\TeamMember[]
     */
    public function getMembersList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <members>
     *
     * @param \RO\Cmd\TeamMember $value
     * @return \RO\Cmd\TeamData
     */
    public function addMembers(\RO\Cmd\TeamMember $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <applys> has a value
     *
     * @return boolean
     */
    public function hasApplys(){
      return $this->_has(5);
    }
    
    /**
     * Clear <applys> value
     *
     * @return \RO\Cmd\TeamData
     */
    public function clearApplys(){
      return $this->_clear(5);
    }
    
    /**
     * Get <applys> value
     *
     * @param int $idx
     * @return \RO\Cmd\TeamApply
     */
    public function getApplys($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <applys> value
     *
     * @param \RO\Cmd\TeamApply $value
     * @return \RO\Cmd\TeamData
     */
    public function setApplys(\RO\Cmd\TeamApply $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <applys>
     *
     * @return \RO\Cmd\TeamApply[]
     */
    public function getApplysList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <applys>
     *
     * @param \RO\Cmd\TeamApply $value
     * @return \RO\Cmd\TeamData
     */
    public function addApplys(\RO\Cmd\TeamApply $value){
     return $this->_add(5, $value);
    }
    
    /**
     * Check if <seal> has a value
     *
     * @return boolean
     */
    public function hasSeal(){
      return $this->_has(6);
    }
    
    /**
     * Clear <seal> value
     *
     * @return \RO\Cmd\TeamData
     */
    public function clearSeal(){
      return $this->_clear(6);
    }
    
    /**
     * Get <seal> value
     *
     * @return \RO\Cmd\TeamSealData
     */
    public function getSeal(){
      return $this->_get(6);
    }
    
    /**
     * Set <seal> value
     *
     * @param \RO\Cmd\TeamSealData $value
     * @return \RO\Cmd\TeamData
     */
    public function setSeal(\RO\Cmd\TeamSealData $value){
      return $this->_set(6, $value);
    }
  }
}

