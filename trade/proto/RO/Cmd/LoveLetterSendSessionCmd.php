<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class LoveLetterSendSessionCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::SESSIONPARAM_LOVELETTER_SEND;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var string */
    public $sendname = null;
    
    /**  @var string */
    public $content = null;
    
    /**  @var int - \RO\Cmd\ELetterType */
    public $type = \RO\Cmd\ELetterType::ELETTERTYPE_CHRISTMAS;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.LoveLetterSendSessionCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SessionParam';
      $f->default   = \RO\Cmd\SessionParam::SESSIONPARAM_LOVELETTER_SEND;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING sendname = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sendname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING content = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "content";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ELetterType';
      $f->default   = \RO\Cmd\ELetterType::ELETTERTYPE_CHRISTMAS;
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
     * @return \RO\Cmd\LoveLetterSendSessionCmd
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
     * @return \RO\Cmd\LoveLetterSendSessionCmd
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
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SessionParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SessionParam $value
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sendname> has a value
     *
     * @return boolean
     */
    public function hasSendname(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sendname> value
     *
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function clearSendname(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sendname> value
     *
     * @return string
     */
    public function getSendname(){
      return $this->_get(4);
    }
    
    /**
     * Set <sendname> value
     *
     * @param string $value
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function setSendname( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <content> has a value
     *
     * @return boolean
     */
    public function hasContent(){
      return $this->_has(5);
    }
    
    /**
     * Clear <content> value
     *
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function clearContent(){
      return $this->_clear(5);
    }
    
    /**
     * Get <content> value
     *
     * @return string
     */
    public function getContent(){
      return $this->_get(5);
    }
    
    /**
     * Set <content> value
     *
     * @param string $value
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function setContent( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(6);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function clearType(){
      return $this->_clear(6);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\ELetterType
     */
    public function getType(){
      return $this->_get(6);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\ELetterType $value
     * @return \RO\Cmd\LoveLetterSendSessionCmd
     */
    public function setType( $value){
      return $this->_set(6, $value);
    }
  }
}

