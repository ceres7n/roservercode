<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneQuest.proto

namespace RO\Cmd {

  class QuestDetailUpdate extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_QUEST_PROTOCMD;
    
    /**  @var int - \RO\Cmd\QuestParam */
    public $param = \RO\Cmd\QuestParam::QUESTPARAM_QUESTDETAILUPDATE;
    
    /**  @var \RO\Cmd\QuestDetail[]  */
    public $detail = array();
    
    /**  @var \RO\Cmd\QuestDetail[]  */
    public $del = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QuestDetailUpdate');

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
      $f->default   = \RO\Cmd\QuestParam::QUESTPARAM_QUESTDETAILUPDATE;
      $descriptor->addField($f);

      // REPEATED MESSAGE detail = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "detail";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestDetail';
      $descriptor->addField($f);

      // REPEATED MESSAGE del = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "del";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestDetail';
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
     * @return \RO\Cmd\QuestDetailUpdate
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
     * @return \RO\Cmd\QuestDetailUpdate
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
     * @return \RO\Cmd\QuestDetailUpdate
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
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <detail> has a value
     *
     * @return boolean
     */
    public function hasDetail(){
      return $this->_has(3);
    }
    
    /**
     * Clear <detail> value
     *
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function clearDetail(){
      return $this->_clear(3);
    }
    
    /**
     * Get <detail> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestDetail
     */
    public function getDetail($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <detail> value
     *
     * @param \RO\Cmd\QuestDetail $value
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function setDetail(\RO\Cmd\QuestDetail $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <detail>
     *
     * @return \RO\Cmd\QuestDetail[]
     */
    public function getDetailList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <detail>
     *
     * @param \RO\Cmd\QuestDetail $value
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function addDetail(\RO\Cmd\QuestDetail $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <del> has a value
     *
     * @return boolean
     */
    public function hasDel(){
      return $this->_has(4);
    }
    
    /**
     * Clear <del> value
     *
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function clearDel(){
      return $this->_clear(4);
    }
    
    /**
     * Get <del> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestDetail
     */
    public function getDel($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <del> value
     *
     * @param \RO\Cmd\QuestDetail $value
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function setDel(\RO\Cmd\QuestDetail $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <del>
     *
     * @return \RO\Cmd\QuestDetail[]
     */
    public function getDelList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <del>
     *
     * @param \RO\Cmd\QuestDetail $value
     * @return \RO\Cmd\QuestDetailUpdate
     */
    public function addDel(\RO\Cmd\QuestDetail $value){
     return $this->_add(4, $value);
    }
  }
}

