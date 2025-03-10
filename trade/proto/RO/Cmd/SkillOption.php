<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneSkill.proto

namespace RO\Cmd {

  class SkillOption extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\ESkillOption */
    public $opt = null;
    
    /**  @var int */
    public $value = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SkillOption');

      // REQUIRED ENUM opt = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "opt";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\RO\Cmd\ESkillOption';
      $descriptor->addField($f);

      // OPTIONAL UINT32 value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
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
     * Check if <opt> has a value
     *
     * @return boolean
     */
    public function hasOpt(){
      return $this->_has(1);
    }
    
    /**
     * Clear <opt> value
     *
     * @return \RO\Cmd\SkillOption
     */
    public function clearOpt(){
      return $this->_clear(1);
    }
    
    /**
     * Get <opt> value
     *
     * @return int - \RO\Cmd\ESkillOption
     */
    public function getOpt(){
      return $this->_get(1);
    }
    
    /**
     * Set <opt> value
     *
     * @param int - \RO\Cmd\ESkillOption $value
     * @return \RO\Cmd\SkillOption
     */
    public function setOpt( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \RO\Cmd\SkillOption
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \RO\Cmd\SkillOption
     */
    public function setValue( $value){
      return $this->_set(2, $value);
    }
  }
}

