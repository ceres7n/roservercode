<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class GuildChallenge extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $progress = 0;
    
    /**  @var boolean */
    public $reward = false;
    
    /**  @var boolean */
    public $extrareward = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildChallenge');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 progress = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "progress";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL reward = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "reward";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL extrareward = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "extrareward";
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
     * @return \RO\Cmd\GuildChallenge
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
     * @return \RO\Cmd\GuildChallenge
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <progress> has a value
     *
     * @return boolean
     */
    public function hasProgress(){
      return $this->_has(2);
    }
    
    /**
     * Clear <progress> value
     *
     * @return \RO\Cmd\GuildChallenge
     */
    public function clearProgress(){
      return $this->_clear(2);
    }
    
    /**
     * Get <progress> value
     *
     * @return int
     */
    public function getProgress(){
      return $this->_get(2);
    }
    
    /**
     * Set <progress> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildChallenge
     */
    public function setProgress( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <reward> has a value
     *
     * @return boolean
     */
    public function hasReward(){
      return $this->_has(3);
    }
    
    /**
     * Clear <reward> value
     *
     * @return \RO\Cmd\GuildChallenge
     */
    public function clearReward(){
      return $this->_clear(3);
    }
    
    /**
     * Get <reward> value
     *
     * @return boolean
     */
    public function getReward(){
      return $this->_get(3);
    }
    
    /**
     * Set <reward> value
     *
     * @param boolean $value
     * @return \RO\Cmd\GuildChallenge
     */
    public function setReward( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <extrareward> has a value
     *
     * @return boolean
     */
    public function hasExtrareward(){
      return $this->_has(4);
    }
    
    /**
     * Clear <extrareward> value
     *
     * @return \RO\Cmd\GuildChallenge
     */
    public function clearExtrareward(){
      return $this->_clear(4);
    }
    
    /**
     * Get <extrareward> value
     *
     * @return boolean
     */
    public function getExtrareward(){
      return $this->_get(4);
    }
    
    /**
     * Set <extrareward> value
     *
     * @param boolean $value
     * @return \RO\Cmd\GuildChallenge
     */
    public function setExtrareward( $value){
      return $this->_set(4, $value);
    }
  }
}

