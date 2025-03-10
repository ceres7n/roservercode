<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class QueryGuildListGuildCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildParam */
    public $param = \RO\Cmd\GuildParam::GUILDPARAM_GUILDLIST;
    
    /**  @var string */
    public $keyword = null;
    
    /**  @var int */
    public $page = 0;
    
    /**  @var \RO\Cmd\GuildSummaryData[]  */
    public $list = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryGuildListGuildCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildParam';
      $f->default   = \RO\Cmd\GuildParam::GUILDPARAM_GUILDLIST;
      $descriptor->addField($f);

      // OPTIONAL STRING keyword = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "keyword";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 page = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "page";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE list = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildSummaryData';
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
     * @return \RO\Cmd\QueryGuildListGuildCmd
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
     * @return \RO\Cmd\QueryGuildListGuildCmd
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
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\GuildParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\GuildParam $value
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <keyword> has a value
     *
     * @return boolean
     */
    public function hasKeyword(){
      return $this->_has(3);
    }
    
    /**
     * Clear <keyword> value
     *
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function clearKeyword(){
      return $this->_clear(3);
    }
    
    /**
     * Get <keyword> value
     *
     * @return string
     */
    public function getKeyword(){
      return $this->_get(3);
    }
    
    /**
     * Set <keyword> value
     *
     * @param string $value
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function setKeyword( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <page> has a value
     *
     * @return boolean
     */
    public function hasPage(){
      return $this->_has(4);
    }
    
    /**
     * Clear <page> value
     *
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function clearPage(){
      return $this->_clear(4);
    }
    
    /**
     * Get <page> value
     *
     * @return int
     */
    public function getPage(){
      return $this->_get(4);
    }
    
    /**
     * Set <page> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function setPage( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <list> has a value
     *
     * @return boolean
     */
    public function hasList(){
      return $this->_has(5);
    }
    
    /**
     * Clear <list> value
     *
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function clearList(){
      return $this->_clear(5);
    }
    
    /**
     * Get <list> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildSummaryData
     */
    public function getList($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <list> value
     *
     * @param \RO\Cmd\GuildSummaryData $value
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function setList(\RO\Cmd\GuildSummaryData $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <list>
     *
     * @return \RO\Cmd\GuildSummaryData[]
     */
    public function getListList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <list>
     *
     * @param \RO\Cmd\GuildSummaryData $value
     * @return \RO\Cmd\QueryGuildListGuildCmd
     */
    public function addList(\RO\Cmd\GuildSummaryData $value){
     return $this->_add(5, $value);
    }
  }
}

