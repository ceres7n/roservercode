<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class GuildPhoto extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $accid_svr = 0;
    
    /**  @var int */
    public $accid = 0;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $anglez = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var int */
    public $mapid = 0;
    
    /**  @var int */
    public $sourceid = 0;
    
    /**  @var int - \RO\Cmd\ESource */
    public $source = \RO\Cmd\ESource::ESOURCE_MIN;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildPhoto');

      // OPTIONAL UINT64 accid_svr = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "accid_svr";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 accid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "accid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 anglez = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "anglez";
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

      // OPTIONAL UINT32 mapid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "mapid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sourceid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sourceid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM source = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "source";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESource';
      $f->default   = \RO\Cmd\ESource::ESOURCE_MIN;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <accid_svr> has a value
     *
     * @return boolean
     */
    public function hasAccidSvr(){
      return $this->_has(8);
    }
    
    /**
     * Clear <accid_svr> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearAccidSvr(){
      return $this->_clear(8);
    }
    
    /**
     * Get <accid_svr> value
     *
     * @return int
     */
    public function getAccidSvr(){
      return $this->_get(8);
    }
    
    /**
     * Set <accid_svr> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setAccidSvr( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <accid> has a value
     *
     * @return boolean
     */
    public function hasAccid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <accid> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearAccid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <accid> value
     *
     * @return int
     */
    public function getAccid(){
      return $this->_get(7);
    }
    
    /**
     * Set <accid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setAccid( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearCharid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(1);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setCharid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <anglez> has a value
     *
     * @return boolean
     */
    public function hasAnglez(){
      return $this->_has(2);
    }
    
    /**
     * Clear <anglez> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearAnglez(){
      return $this->_clear(2);
    }
    
    /**
     * Get <anglez> value
     *
     * @return int
     */
    public function getAnglez(){
      return $this->_get(2);
    }
    
    /**
     * Set <anglez> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setAnglez( $value){
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
     * @return \RO\Cmd\GuildPhoto
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
     * @return \RO\Cmd\GuildPhoto
     */
    public function setTime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <mapid> has a value
     *
     * @return boolean
     */
    public function hasMapid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <mapid> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearMapid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <mapid> value
     *
     * @return int
     */
    public function getMapid(){
      return $this->_get(4);
    }
    
    /**
     * Set <mapid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setMapid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <sourceid> has a value
     *
     * @return boolean
     */
    public function hasSourceid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <sourceid> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearSourceid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <sourceid> value
     *
     * @return int
     */
    public function getSourceid(){
      return $this->_get(5);
    }
    
    /**
     * Set <sourceid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setSourceid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <source> has a value
     *
     * @return boolean
     */
    public function hasSource(){
      return $this->_has(6);
    }
    
    /**
     * Clear <source> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function clearSource(){
      return $this->_clear(6);
    }
    
    /**
     * Get <source> value
     *
     * @return int - \RO\Cmd\ESource
     */
    public function getSource(){
      return $this->_get(6);
    }
    
    /**
     * Set <source> value
     *
     * @param int - \RO\Cmd\ESource $value
     * @return \RO\Cmd\GuildPhoto
     */
    public function setSource( $value){
      return $this->_set(6, $value);
    }
  }
}

