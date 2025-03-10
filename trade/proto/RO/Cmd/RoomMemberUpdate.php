<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneChatRoom.proto

namespace RO\Cmd {

  class RoomMemberUpdate extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_CHATROOM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\EChatRoomParam */
    public $param = \RO\Cmd\EChatRoomParam::ECHATROOMPARAM_MEMBERUPDATE;
    
    /**  @var \RO\Cmd\ChatRoomMember[]  */
    public $updates = array();
    
    /**  @var int[]  */
    public $deletes = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.RoomMemberUpdate');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_CHATROOM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatRoomParam';
      $f->default   = \RO\Cmd\EChatRoomParam::ECHATROOMPARAM_MEMBERUPDATE;
      $descriptor->addField($f);

      // REPEATED MESSAGE updates = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "updates";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ChatRoomMember';
      $descriptor->addField($f);

      // REPEATED UINT64 deletes = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "deletes";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
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
     * @return \RO\Cmd\RoomMemberUpdate
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
     * @return \RO\Cmd\RoomMemberUpdate
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
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\EChatRoomParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\EChatRoomParam $value
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <updates> has a value
     *
     * @return boolean
     */
    public function hasUpdates(){
      return $this->_has(3);
    }
    
    /**
     * Clear <updates> value
     *
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function clearUpdates(){
      return $this->_clear(3);
    }
    
    /**
     * Get <updates> value
     *
     * @param int $idx
     * @return \RO\Cmd\ChatRoomMember
     */
    public function getUpdates($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <updates> value
     *
     * @param \RO\Cmd\ChatRoomMember $value
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function setUpdates(\RO\Cmd\ChatRoomMember $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <updates>
     *
     * @return \RO\Cmd\ChatRoomMember[]
     */
    public function getUpdatesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <updates>
     *
     * @param \RO\Cmd\ChatRoomMember $value
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function addUpdates(\RO\Cmd\ChatRoomMember $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <deletes> has a value
     *
     * @return boolean
     */
    public function hasDeletes(){
      return $this->_has(4);
    }
    
    /**
     * Clear <deletes> value
     *
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function clearDeletes(){
      return $this->_clear(4);
    }
    
    /**
     * Get <deletes> value
     *
     * @param int $idx
     * @return int
     */
    public function getDeletes($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <deletes> value
     *
     * @param int $value
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function setDeletes( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <deletes>
     *
     * @return int[]
     */
    public function getDeletesList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <deletes>
     *
     * @param int $value
     * @return \RO\Cmd\RoomMemberUpdate
     */
    public function addDeletes( $value){
     return $this->_add(4, $value);
    }
  }
}

