<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class WeddingData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $zoneid = 0;
    
    /**  @var int */
    public $charid1 = 0;
    
    /**  @var int */
    public $charid2 = 0;
    
    /**  @var int */
    public $weddingtime = 0;
    
    /**  @var int */
    public $photoidx = 0;
    
    /**  @var int */
    public $phototime = 0;
    
    /**  @var string */
    public $myname = null;
    
    /**  @var string */
    public $partnername = null;
    
    /**  @var int */
    public $starttime = 0;
    
    /**  @var int */
    public $endtime = 0;
    
    /**  @var boolean */
    public $notified = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.WeddingData');

      // OPTIONAL UINT64 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 zoneid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "zoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid1 = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid1";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid2 = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "charid2";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 weddingtime = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "weddingtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 photoidx = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "photoidx";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 phototime = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "phototime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING myname = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "myname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING partnername = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "partnername";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 starttime = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "starttime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 endtime = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "endtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL notified = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "notified";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
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
     * @return \RO\Cmd\WeddingData
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
     * @return \RO\Cmd\WeddingData
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <zoneid> has a value
     *
     * @return boolean
     */
    public function hasZoneid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <zoneid> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearZoneid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <zoneid> value
     *
     * @return int
     */
    public function getZoneid(){
      return $this->_get(2);
    }
    
    /**
     * Set <zoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setZoneid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid1> has a value
     *
     * @return boolean
     */
    public function hasCharid1(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid1> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearCharid1(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid1> value
     *
     * @return int
     */
    public function getCharid1(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid1> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setCharid1( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <charid2> has a value
     *
     * @return boolean
     */
    public function hasCharid2(){
      return $this->_has(4);
    }
    
    /**
     * Clear <charid2> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearCharid2(){
      return $this->_clear(4);
    }
    
    /**
     * Get <charid2> value
     *
     * @return int
     */
    public function getCharid2(){
      return $this->_get(4);
    }
    
    /**
     * Set <charid2> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setCharid2( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <weddingtime> has a value
     *
     * @return boolean
     */
    public function hasWeddingtime(){
      return $this->_has(5);
    }
    
    /**
     * Clear <weddingtime> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearWeddingtime(){
      return $this->_clear(5);
    }
    
    /**
     * Get <weddingtime> value
     *
     * @return int
     */
    public function getWeddingtime(){
      return $this->_get(5);
    }
    
    /**
     * Set <weddingtime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setWeddingtime( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <photoidx> has a value
     *
     * @return boolean
     */
    public function hasPhotoidx(){
      return $this->_has(6);
    }
    
    /**
     * Clear <photoidx> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearPhotoidx(){
      return $this->_clear(6);
    }
    
    /**
     * Get <photoidx> value
     *
     * @return int
     */
    public function getPhotoidx(){
      return $this->_get(6);
    }
    
    /**
     * Set <photoidx> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setPhotoidx( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <phototime> has a value
     *
     * @return boolean
     */
    public function hasPhototime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <phototime> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearPhototime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <phototime> value
     *
     * @return int
     */
    public function getPhototime(){
      return $this->_get(7);
    }
    
    /**
     * Set <phototime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setPhototime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <myname> has a value
     *
     * @return boolean
     */
    public function hasMyname(){
      return $this->_has(8);
    }
    
    /**
     * Clear <myname> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearMyname(){
      return $this->_clear(8);
    }
    
    /**
     * Get <myname> value
     *
     * @return string
     */
    public function getMyname(){
      return $this->_get(8);
    }
    
    /**
     * Set <myname> value
     *
     * @param string $value
     * @return \RO\Cmd\WeddingData
     */
    public function setMyname( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <partnername> has a value
     *
     * @return boolean
     */
    public function hasPartnername(){
      return $this->_has(9);
    }
    
    /**
     * Clear <partnername> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearPartnername(){
      return $this->_clear(9);
    }
    
    /**
     * Get <partnername> value
     *
     * @return string
     */
    public function getPartnername(){
      return $this->_get(9);
    }
    
    /**
     * Set <partnername> value
     *
     * @param string $value
     * @return \RO\Cmd\WeddingData
     */
    public function setPartnername( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <starttime> has a value
     *
     * @return boolean
     */
    public function hasStarttime(){
      return $this->_has(10);
    }
    
    /**
     * Clear <starttime> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearStarttime(){
      return $this->_clear(10);
    }
    
    /**
     * Get <starttime> value
     *
     * @return int
     */
    public function getStarttime(){
      return $this->_get(10);
    }
    
    /**
     * Set <starttime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setStarttime( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <endtime> has a value
     *
     * @return boolean
     */
    public function hasEndtime(){
      return $this->_has(11);
    }
    
    /**
     * Clear <endtime> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearEndtime(){
      return $this->_clear(11);
    }
    
    /**
     * Get <endtime> value
     *
     * @return int
     */
    public function getEndtime(){
      return $this->_get(11);
    }
    
    /**
     * Set <endtime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingData
     */
    public function setEndtime( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <notified> has a value
     *
     * @return boolean
     */
    public function hasNotified(){
      return $this->_has(12);
    }
    
    /**
     * Clear <notified> value
     *
     * @return \RO\Cmd\WeddingData
     */
    public function clearNotified(){
      return $this->_clear(12);
    }
    
    /**
     * Get <notified> value
     *
     * @return boolean
     */
    public function getNotified(){
      return $this->_get(12);
    }
    
    /**
     * Set <notified> value
     *
     * @param boolean $value
     * @return \RO\Cmd\WeddingData
     */
    public function setNotified( $value){
      return $this->_set(12, $value);
    }
  }
}

