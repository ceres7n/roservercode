<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class GMCommandRespondGuildSCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildSParam */
    public $param = \RO\Cmd\GuildSParam::GUILDSPARAM_GM_RESPOND;
    
    /**  @var \RO\Cmd\GuildGM */
    public $info = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GMCommandRespondGuildSCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::GUILD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildSParam';
      $f->default   = \RO\Cmd\GuildSParam::GUILDSPARAM_GM_RESPOND;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE info = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildGM';
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
     * @return \RO\Cmd\GMCommandRespondGuildSCmd
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
     * @return \RO\Cmd\GMCommandRespondGuildSCmd
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
     * @return \RO\Cmd\GMCommandRespondGuildSCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\GuildSParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\GuildSParam $value
     * @return \RO\Cmd\GMCommandRespondGuildSCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <info> has a value
     *
     * @return boolean
     */
    public function hasInfo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <info> value
     *
     * @return \RO\Cmd\GMCommandRespondGuildSCmd
     */
    public function clearInfo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <info> value
     *
     * @return \RO\Cmd\GuildGM
     */
    public function getInfo(){
      return $this->_get(3);
    }
    
    /**
     * Set <info> value
     *
     * @param \RO\Cmd\GuildGM $value
     * @return \RO\Cmd\GMCommandRespondGuildSCmd
     */
    public function setInfo(\RO\Cmd\GuildGM $value){
      return $this->_set(3, $value);
    }
  }
}

