<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class PetEquipListCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
    
    /**  @var int - \RO\Cmd\PetParam */
    public $param = \RO\Cmd\PetParam::PETPARAM_EQUIP_LIST;
    
    /**  @var \RO\Cmd\PetEquipUnlockInfo */
    public $unlockinfo = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PetEquipListCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\PetParam';
      $f->default   = \RO\Cmd\PetParam::PETPARAM_EQUIP_LIST;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unlockinfo = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unlockinfo";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\PetEquipUnlockInfo';
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
     * @return \RO\Cmd\PetEquipListCmd
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
     * @return \RO\Cmd\PetEquipListCmd
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
     * @return \RO\Cmd\PetEquipListCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\PetParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\PetParam $value
     * @return \RO\Cmd\PetEquipListCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <unlockinfo> has a value
     *
     * @return boolean
     */
    public function hasUnlockinfo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unlockinfo> value
     *
     * @return \RO\Cmd\PetEquipListCmd
     */
    public function clearUnlockinfo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unlockinfo> value
     *
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function getUnlockinfo(){
      return $this->_get(3);
    }
    
    /**
     * Set <unlockinfo> value
     *
     * @param \RO\Cmd\PetEquipUnlockInfo $value
     * @return \RO\Cmd\PetEquipListCmd
     */
    public function setUnlockinfo(\RO\Cmd\PetEquipUnlockInfo $value){
      return $this->_set(3, $value);
    }
  }
}

