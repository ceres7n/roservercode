<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class AttrProfessionData extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\UserAttr[]  */
    public $attrs = array();
    
    /**  @var \RO\Cmd\UserData[]  */
    public $datas = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.AttrProfessionData');

      // REPEATED MESSAGE attrs = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "attrs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserAttr';
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserData';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <attrs> has a value
     *
     * @return boolean
     */
    public function hasAttrs(){
      return $this->_has(1);
    }
    
    /**
     * Clear <attrs> value
     *
     * @return \RO\Cmd\AttrProfessionData
     */
    public function clearAttrs(){
      return $this->_clear(1);
    }
    
    /**
     * Get <attrs> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserAttr
     */
    public function getAttrs($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <attrs> value
     *
     * @param \RO\Cmd\UserAttr $value
     * @return \RO\Cmd\AttrProfessionData
     */
    public function setAttrs(\RO\Cmd\UserAttr $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <attrs>
     *
     * @return \RO\Cmd\UserAttr[]
     */
    public function getAttrsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <attrs>
     *
     * @param \RO\Cmd\UserAttr $value
     * @return \RO\Cmd\AttrProfessionData
     */
    public function addAttrs(\RO\Cmd\UserAttr $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(2);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\AttrProfessionData
     */
    public function clearDatas(){
      return $this->_clear(2);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserData
     */
    public function getDatas($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\UserData $value
     * @return \RO\Cmd\AttrProfessionData
     */
    public function setDatas(\RO\Cmd\UserData $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\UserData[]
     */
    public function getDatasList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\UserData $value
     * @return \RO\Cmd\AttrProfessionData
     */
    public function addDatas(\RO\Cmd\UserData $value){
     return $this->_add(2, $value);
    }
  }
}

