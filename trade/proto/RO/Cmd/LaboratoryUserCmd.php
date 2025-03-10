<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class LaboratoryUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_LABORATORY;
    
    /**  @var int */
    public $round = 0;
    
    /**  @var int */
    public $curscore = 0;
    
    /**  @var int */
    public $maxscore = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.LaboratoryUserCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_LABORATORY;
      $descriptor->addField($f);

      // OPTIONAL UINT32 round = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "round";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 curscore = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "curscore";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 maxscore = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "maxscore";
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
     * @return \RO\Cmd\LaboratoryUserCmd
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
     * @return \RO\Cmd\LaboratoryUserCmd
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
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <round> has a value
     *
     * @return boolean
     */
    public function hasRound(){
      return $this->_has(3);
    }
    
    /**
     * Clear <round> value
     *
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function clearRound(){
      return $this->_clear(3);
    }
    
    /**
     * Get <round> value
     *
     * @return int
     */
    public function getRound(){
      return $this->_get(3);
    }
    
    /**
     * Set <round> value
     *
     * @param int $value
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function setRound( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <curscore> has a value
     *
     * @return boolean
     */
    public function hasCurscore(){
      return $this->_has(4);
    }
    
    /**
     * Clear <curscore> value
     *
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function clearCurscore(){
      return $this->_clear(4);
    }
    
    /**
     * Get <curscore> value
     *
     * @return int
     */
    public function getCurscore(){
      return $this->_get(4);
    }
    
    /**
     * Set <curscore> value
     *
     * @param int $value
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function setCurscore( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <maxscore> has a value
     *
     * @return boolean
     */
    public function hasMaxscore(){
      return $this->_has(5);
    }
    
    /**
     * Clear <maxscore> value
     *
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function clearMaxscore(){
      return $this->_clear(5);
    }
    
    /**
     * Get <maxscore> value
     *
     * @return int
     */
    public function getMaxscore(){
      return $this->_get(5);
    }
    
    /**
     * Set <maxscore> value
     *
     * @param int $value
     * @return \RO\Cmd\LaboratoryUserCmd
     */
    public function setMaxscore( $value){
      return $this->_set(5, $value);
    }
  }
}

