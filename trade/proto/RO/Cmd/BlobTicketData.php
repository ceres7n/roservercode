<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobTicketData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\ETicketType */
    public $type = null;
    
    /**  @var string */
    public $guid = null;
    
    /**  @var int - \RO\Cmd\ETicketRet */
    public $ret = null;
    
    /**  @var int */
    public $time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobTicketData');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETicketType';
      $descriptor->addField($f);

      // OPTIONAL STRING guid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM ret = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "ret";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETicketRet';
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\BlobTicketData
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\ETicketType
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\ETicketType $value
     * @return \RO\Cmd\BlobTicketData
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\BlobTicketData
     */
    public function clearGuid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <guid> value
     *
     * @return string
     */
    public function getGuid(){
      return $this->_get(2);
    }
    
    /**
     * Set <guid> value
     *
     * @param string $value
     * @return \RO\Cmd\BlobTicketData
     */
    public function setGuid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <ret> has a value
     *
     * @return boolean
     */
    public function hasRet(){
      return $this->_has(3);
    }
    
    /**
     * Clear <ret> value
     *
     * @return \RO\Cmd\BlobTicketData
     */
    public function clearRet(){
      return $this->_clear(3);
    }
    
    /**
     * Get <ret> value
     *
     * @return int - \RO\Cmd\ETicketRet
     */
    public function getRet(){
      return $this->_get(3);
    }
    
    /**
     * Set <ret> value
     *
     * @param int - \RO\Cmd\ETicketRet $value
     * @return \RO\Cmd\BlobTicketData
     */
    public function setRet( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\BlobTicketData
     */
    public function clearTime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(4);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobTicketData
     */
    public function setTime( $value){
      return $this->_set(4, $value);
    }
  }
}

