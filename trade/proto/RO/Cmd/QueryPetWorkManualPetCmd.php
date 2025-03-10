<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class QueryPetWorkManualPetCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
    
    /**  @var int - \RO\Cmd\PetParam */
    public $param = \RO\Cmd\PetParam::PETPARAM_WORK_QUERYWORKMANUAL;
    
    /**  @var \RO\Cmd\WorkManual */
    public $manual = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryPetWorkManualPetCmd');

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
      $f->default   = \RO\Cmd\PetParam::PETPARAM_WORK_QUERYWORKMANUAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE manual = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "manual";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\WorkManual';
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
     * @return \RO\Cmd\QueryPetWorkManualPetCmd
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
     * @return \RO\Cmd\QueryPetWorkManualPetCmd
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
     * @return \RO\Cmd\QueryPetWorkManualPetCmd
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
     * @return \RO\Cmd\QueryPetWorkManualPetCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <manual> has a value
     *
     * @return boolean
     */
    public function hasManual(){
      return $this->_has(3);
    }
    
    /**
     * Clear <manual> value
     *
     * @return \RO\Cmd\QueryPetWorkManualPetCmd
     */
    public function clearManual(){
      return $this->_clear(3);
    }
    
    /**
     * Get <manual> value
     *
     * @return \RO\Cmd\WorkManual
     */
    public function getManual(){
      return $this->_get(3);
    }
    
    /**
     * Set <manual> value
     *
     * @param \RO\Cmd\WorkManual $value
     * @return \RO\Cmd\QueryPetWorkManualPetCmd
     */
    public function setManual(\RO\Cmd\WorkManual $value){
      return $this->_set(3, $value);
    }
  }
}

