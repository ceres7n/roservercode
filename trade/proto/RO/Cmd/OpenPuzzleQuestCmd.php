<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneQuest.proto

namespace RO\Cmd {

  class OpenPuzzleQuestCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_QUEST_PROTOCMD;
    
    /**  @var int - \RO\Cmd\QuestParam */
    public $param = \RO\Cmd\QuestParam::QUESTPARAM_OPEN_PUZZLE;
    
    /**  @var string */
    public $version = null;
    
    /**  @var int */
    public $id = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.OpenPuzzleQuestCmd');

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
      $f->default   = \RO\Cmd\QuestParam::QUESTPARAM_OPEN_PUZZLE;
      $descriptor->addField($f);

      // OPTIONAL STRING version = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
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
     * @return \RO\Cmd\OpenPuzzleQuestCmd
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
     * @return \RO\Cmd\OpenPuzzleQuestCmd
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
     * @return \RO\Cmd\OpenPuzzleQuestCmd
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
     * @return \RO\Cmd\OpenPuzzleQuestCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(3);
    }
    
    /**
     * Clear <version> value
     *
     * @return \RO\Cmd\OpenPuzzleQuestCmd
     */
    public function clearVersion(){
      return $this->_clear(3);
    }
    
    /**
     * Get <version> value
     *
     * @return string
     */
    public function getVersion(){
      return $this->_get(3);
    }
    
    /**
     * Set <version> value
     *
     * @param string $value
     * @return \RO\Cmd\OpenPuzzleQuestCmd
     */
    public function setVersion( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\OpenPuzzleQuestCmd
     */
    public function clearId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(4);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\OpenPuzzleQuestCmd
     */
    public function setId( $value){
      return $this->_set(4, $value);
    }
  }
}

