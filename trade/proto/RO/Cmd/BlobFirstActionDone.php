<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobFirstActionDone extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $action = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobFirstActionDone');

      // OPTIONAL UINT32 action = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "action";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <action> has a value
     *
     * @return boolean
     */
    public function hasAction(){
      return $this->_has(1);
    }
    
    /**
     * Clear <action> value
     *
     * @return \RO\Cmd\BlobFirstActionDone
     */
    public function clearAction(){
      return $this->_clear(1);
    }
    
    /**
     * Get <action> value
     *
     * @return int
     */
    public function getAction(){
      return $this->_get(1);
    }
    
    /**
     * Set <action> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobFirstActionDone
     */
    public function setAction( $value){
      return $this->_set(1, $value);
    }
  }
}

