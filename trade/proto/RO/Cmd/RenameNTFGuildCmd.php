<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class RenameNTFGuildCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildSParam */
    public $param = \RO\Cmd\GuildSParam::GUILDSPARAM_RENAME_NTF;
    
    /**  @var \RO\Cmd\SocialUser */
    public $user = null;
    
    /**  @var string */
    public $newname = null;
    
    /**  @var boolean */
    public $result = true;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.RenameNTFGuildCmd');

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
      $f->default   = \RO\Cmd\GuildSParam::GUILDSPARAM_RENAME_NTF;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "user";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SocialUser';
      $descriptor->addField($f);

      // OPTIONAL STRING newname = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "newname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL result = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = true;
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
     * @return \RO\Cmd\RenameNTFGuildCmd
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
     * @return \RO\Cmd\RenameNTFGuildCmd
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
     * @return \RO\Cmd\RenameNTFGuildCmd
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
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <user> has a value
     *
     * @return boolean
     */
    public function hasUser(){
      return $this->_has(3);
    }
    
    /**
     * Clear <user> value
     *
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function clearUser(){
      return $this->_clear(3);
    }
    
    /**
     * Get <user> value
     *
     * @return \RO\Cmd\SocialUser
     */
    public function getUser(){
      return $this->_get(3);
    }
    
    /**
     * Set <user> value
     *
     * @param \RO\Cmd\SocialUser $value
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function setUser(\RO\Cmd\SocialUser $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <newname> has a value
     *
     * @return boolean
     */
    public function hasNewname(){
      return $this->_has(4);
    }
    
    /**
     * Clear <newname> value
     *
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function clearNewname(){
      return $this->_clear(4);
    }
    
    /**
     * Get <newname> value
     *
     * @return string
     */
    public function getNewname(){
      return $this->_get(4);
    }
    
    /**
     * Set <newname> value
     *
     * @param string $value
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function setNewname( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(5);
    }
    
    /**
     * Clear <result> value
     *
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function clearResult(){
      return $this->_clear(5);
    }
    
    /**
     * Get <result> value
     *
     * @return boolean
     */
    public function getResult(){
      return $this->_get(5);
    }
    
    /**
     * Set <result> value
     *
     * @param boolean $value
     * @return \RO\Cmd\RenameNTFGuildCmd
     */
    public function setResult( $value){
      return $this->_set(5, $value);
    }
  }
}

