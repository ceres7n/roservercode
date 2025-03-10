<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneTip.proto

namespace RO\Cmd {

  class BrowseRedTipCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_TIP_PROTOCMD;
    
    /**  @var int - \RO\Cmd\TipParam */
    public $param = \RO\Cmd\TipParam::TIPPARAM_BROWSE;
    
    /**  @var int - \RO\Cmd\ERedSys */
    public $red = \RO\Cmd\ERedSys::EREDSYS_MIN;
    
    /**  @var int */
    public $tipid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BrowseRedTipCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_TIP_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\TipParam';
      $f->default   = \RO\Cmd\TipParam::TIPPARAM_BROWSE;
      $descriptor->addField($f);

      // OPTIONAL ENUM red = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "red";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ERedSys';
      $f->default   = \RO\Cmd\ERedSys::EREDSYS_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT64 tipid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "tipid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
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
     * @return \RO\Cmd\BrowseRedTipCmd
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
     * @return \RO\Cmd\BrowseRedTipCmd
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
     * @return \RO\Cmd\BrowseRedTipCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\TipParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\TipParam $value
     * @return \RO\Cmd\BrowseRedTipCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <red> has a value
     *
     * @return boolean
     */
    public function hasRed(){
      return $this->_has(3);
    }
    
    /**
     * Clear <red> value
     *
     * @return \RO\Cmd\BrowseRedTipCmd
     */
    public function clearRed(){
      return $this->_clear(3);
    }
    
    /**
     * Get <red> value
     *
     * @return int - \RO\Cmd\ERedSys
     */
    public function getRed(){
      return $this->_get(3);
    }
    
    /**
     * Set <red> value
     *
     * @param int - \RO\Cmd\ERedSys $value
     * @return \RO\Cmd\BrowseRedTipCmd
     */
    public function setRed( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <tipid> has a value
     *
     * @return boolean
     */
    public function hasTipid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <tipid> value
     *
     * @return \RO\Cmd\BrowseRedTipCmd
     */
    public function clearTipid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <tipid> value
     *
     * @return int
     */
    public function getTipid(){
      return $this->_get(4);
    }
    
    /**
     * Set <tipid> value
     *
     * @param int $value
     * @return \RO\Cmd\BrowseRedTipCmd
     */
    public function setTipid( $value){
      return $this->_set(4, $value);
    }
  }
}

