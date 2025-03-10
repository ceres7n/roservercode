<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class DelSceneImage extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::DEL_SCENE_IMAGE;
    
    /**  @var int */
    public $guid = 0;
    
    /**  @var int */
    public $realscene = 0;
    
    /**  @var int - \RO\Cmd\ESceneImageType */
    public $etype = \RO\Cmd\ESceneImageType::ESCENEIMAGE_MIN;
    
    /**  @var int */
    public $raid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DelSceneImage');

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
      $f->default   = \RO\Cmd\SessionParam::DEL_SCENE_IMAGE;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 realscene = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "realscene";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM etype = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESceneImageType';
      $f->default   = \RO\Cmd\ESceneImageType::ESCENEIMAGE_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT32 raid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "raid";
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
     * @return \RO\Cmd\DelSceneImage
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
     * @return \RO\Cmd\DelSceneImage
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
     * @return \RO\Cmd\DelSceneImage
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
     * @return \RO\Cmd\DelSceneImage
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\DelSceneImage
     */
    public function clearGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guid> value
     *
     * @return int
     */
    public function getGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guid> value
     *
     * @param int $value
     * @return \RO\Cmd\DelSceneImage
     */
    public function setGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <realscene> has a value
     *
     * @return boolean
     */
    public function hasRealscene(){
      return $this->_has(4);
    }
    
    /**
     * Clear <realscene> value
     *
     * @return \RO\Cmd\DelSceneImage
     */
    public function clearRealscene(){
      return $this->_clear(4);
    }
    
    /**
     * Get <realscene> value
     *
     * @return int
     */
    public function getRealscene(){
      return $this->_get(4);
    }
    
    /**
     * Set <realscene> value
     *
     * @param int $value
     * @return \RO\Cmd\DelSceneImage
     */
    public function setRealscene( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(5);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\DelSceneImage
     */
    public function clearEtype(){
      return $this->_clear(5);
    }
    
    /**
     * Get <etype> value
     *
     * @return int - \RO\Cmd\ESceneImageType
     */
    public function getEtype(){
      return $this->_get(5);
    }
    
    /**
     * Set <etype> value
     *
     * @param int - \RO\Cmd\ESceneImageType $value
     * @return \RO\Cmd\DelSceneImage
     */
    public function setEtype( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <raid> has a value
     *
     * @return boolean
     */
    public function hasRaid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <raid> value
     *
     * @return \RO\Cmd\DelSceneImage
     */
    public function clearRaid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <raid> value
     *
     * @return int
     */
    public function getRaid(){
      return $this->_get(6);
    }
    
    /**
     * Set <raid> value
     *
     * @param int $value
     * @return \RO\Cmd\DelSceneImage
     */
    public function setRaid( $value){
      return $this->_set(6, $value);
    }
  }
}

