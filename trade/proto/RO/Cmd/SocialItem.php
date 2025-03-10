<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SocialCmd.proto

namespace RO\Cmd {

  class SocialItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $relation = 0;
    
    /**  @var string */
    public $createtime = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SocialItem');

      // OPTIONAL UINT64 charid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 relation = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "relation";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING createtime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "createtime";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\SocialItem
     */
    public function clearCharid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(1);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialItem
     */
    public function setCharid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <relation> has a value
     *
     * @return boolean
     */
    public function hasRelation(){
      return $this->_has(2);
    }
    
    /**
     * Clear <relation> value
     *
     * @return \RO\Cmd\SocialItem
     */
    public function clearRelation(){
      return $this->_clear(2);
    }
    
    /**
     * Get <relation> value
     *
     * @return int
     */
    public function getRelation(){
      return $this->_get(2);
    }
    
    /**
     * Set <relation> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialItem
     */
    public function setRelation( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <createtime> has a value
     *
     * @return boolean
     */
    public function hasCreatetime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <createtime> value
     *
     * @return \RO\Cmd\SocialItem
     */
    public function clearCreatetime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <createtime> value
     *
     * @return string
     */
    public function getCreatetime(){
      return $this->_get(3);
    }
    
    /**
     * Set <createtime> value
     *
     * @param string $value
     * @return \RO\Cmd\SocialItem
     */
    public function setCreatetime( $value){
      return $this->_set(3, $value);
    }
  }
}

