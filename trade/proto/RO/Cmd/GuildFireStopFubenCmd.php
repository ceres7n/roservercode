<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: FuBenCmd.proto

namespace RO\Cmd {

  class GuildFireStopFubenCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::FUBEN_PROTOCMD;
    
    /**  @var int - \RO\Cmd\FuBenParam */
    public $param = \RO\Cmd\FuBenParam::GUILD_FIRE_STOP;
    
    /**  @var int - \RO\Cmd\EGuildFireResult */
    public $result = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildFireStopFubenCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::FUBEN_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\FuBenParam';
      $f->default   = \RO\Cmd\FuBenParam::GUILD_FIRE_STOP;
      $descriptor->addField($f);

      // REQUIRED ENUM result = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\RO\Cmd\EGuildFireResult';
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
     * @return \RO\Cmd\GuildFireStopFubenCmd
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
     * @return \RO\Cmd\GuildFireStopFubenCmd
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
     * @return \RO\Cmd\GuildFireStopFubenCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\FuBenParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\FuBenParam $value
     * @return \RO\Cmd\GuildFireStopFubenCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(3);
    }
    
    /**
     * Clear <result> value
     *
     * @return \RO\Cmd\GuildFireStopFubenCmd
     */
    public function clearResult(){
      return $this->_clear(3);
    }
    
    /**
     * Get <result> value
     *
     * @return int - \RO\Cmd\EGuildFireResult
     */
    public function getResult(){
      return $this->_get(3);
    }
    
    /**
     * Set <result> value
     *
     * @param int - \RO\Cmd\EGuildFireResult $value
     * @return \RO\Cmd\GuildFireStopFubenCmd
     */
    public function setResult( $value){
      return $this->_set(3, $value);
    }
  }
}

