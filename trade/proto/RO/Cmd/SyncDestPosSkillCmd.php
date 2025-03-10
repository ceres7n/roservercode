<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneSkill.proto

namespace RO\Cmd {

  class SyncDestPosSkillCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_SKILL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SkillParam */
    public $param = \RO\Cmd\SkillParam::SKILLPARAM_SYNC_DEST_POS;
    
    /**  @var int */
    public $skillid = 0;
    
    /**  @var \RO\Cmd\ScenePos */
    public $pos = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SyncDestPosSkillCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_SKILL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SkillParam';
      $f->default   = \RO\Cmd\SkillParam::SKILLPARAM_SYNC_DEST_POS;
      $descriptor->addField($f);

      // OPTIONAL UINT32 skillid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "skillid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pos = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
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
     * @return \RO\Cmd\SyncDestPosSkillCmd
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
     * @return \RO\Cmd\SyncDestPosSkillCmd
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
     * @return \RO\Cmd\SyncDestPosSkillCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SkillParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SkillParam $value
     * @return \RO\Cmd\SyncDestPosSkillCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <skillid> has a value
     *
     * @return boolean
     */
    public function hasSkillid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <skillid> value
     *
     * @return \RO\Cmd\SyncDestPosSkillCmd
     */
    public function clearSkillid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <skillid> value
     *
     * @return int
     */
    public function getSkillid(){
      return $this->_get(3);
    }
    
    /**
     * Set <skillid> value
     *
     * @param int $value
     * @return \RO\Cmd\SyncDestPosSkillCmd
     */
    public function setSkillid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(4);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\SyncDestPosSkillCmd
     */
    public function clearPos(){
      return $this->_clear(4);
    }
    
    /**
     * Get <pos> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getPos(){
      return $this->_get(4);
    }
    
    /**
     * Set <pos> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\SyncDestPosSkillCmd
     */
    public function setPos(\RO\Cmd\ScenePos $value){
      return $this->_set(4, $value);
    }
  }
}

