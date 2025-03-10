<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneQuest.proto

namespace RO\Cmd {

  class HelpQuickFinishBoardQuestCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_QUEST_PROTOCMD;
    
    /**  @var int - \RO\Cmd\QuestParam */
    public $param = \RO\Cmd\QuestParam::QUESTPARAM_HELP_QUICK_FINISH_BOARD;
    
    /**  @var int */
    public $questid = 0;
    
    /**  @var string */
    public $leadername = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.HelpQuickFinishBoardQuestCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_QUEST_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\QuestParam';
      $f->default   = \RO\Cmd\QuestParam::QUESTPARAM_HELP_QUICK_FINISH_BOARD;
      $descriptor->addField($f);

      // OPTIONAL UINT32 questid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "questid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING leadername = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "leadername";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
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
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
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
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\QuestParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\QuestParam $value
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <questid> has a value
     *
     * @return boolean
     */
    public function hasQuestid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <questid> value
     *
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
     */
    public function clearQuestid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <questid> value
     *
     * @return int
     */
    public function getQuestid(){
      return $this->_get(3);
    }
    
    /**
     * Set <questid> value
     *
     * @param int $value
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
     */
    public function setQuestid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <leadername> has a value
     *
     * @return boolean
     */
    public function hasLeadername(){
      return $this->_has(4);
    }
    
    /**
     * Clear <leadername> value
     *
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
     */
    public function clearLeadername(){
      return $this->_clear(4);
    }
    
    /**
     * Get <leadername> value
     *
     * @return string
     */
    public function getLeadername(){
      return $this->_get(4);
    }
    
    /**
     * Set <leadername> value
     *
     * @param string $value
     * @return \RO\Cmd\HelpQuickFinishBoardQuestCmd
     */
    public function setLeadername( $value){
      return $this->_set(4, $value);
    }
  }
}

