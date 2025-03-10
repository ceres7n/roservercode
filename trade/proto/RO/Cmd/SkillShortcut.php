<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneSkill.proto

namespace RO\Cmd {

  class SkillShortcut extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\ESkillShortcut */
    public $type = \RO\Cmd\ESkillShortcut::ESKILLSHORTCUT_MIN;
    
    /**  @var int */
    public $pos = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SkillShortcut');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESkillShortcut';
      $f->default   = \RO\Cmd\ESkillShortcut::ESKILLSHORTCUT_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT32 pos = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "pos";
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
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(1);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\SkillShortcut
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\ESkillShortcut
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\ESkillShortcut $value
     * @return \RO\Cmd\SkillShortcut
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(2);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\SkillShortcut
     */
    public function clearPos(){
      return $this->_clear(2);
    }
    
    /**
     * Get <pos> value
     *
     * @return int
     */
    public function getPos(){
      return $this->_get(2);
    }
    
    /**
     * Set <pos> value
     *
     * @param int $value
     * @return \RO\Cmd\SkillShortcut
     */
    public function setPos( $value){
      return $this->_set(2, $value);
    }
  }
}

