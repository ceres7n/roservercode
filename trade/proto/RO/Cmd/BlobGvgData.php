<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobGvgData extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\GvgData[]  */
    public $datas = array();
    
    /**  @var int */
    public $expiretime = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobGvgData');

      // REPEATED MESSAGE datas = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GvgData';
      $descriptor->addField($f);

      // OPTIONAL UINT32 expiretime = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "expiretime";
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
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(1);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\BlobGvgData
     */
    public function clearDatas(){
      return $this->_clear(1);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\GvgData
     */
    public function getDatas($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\GvgData $value
     * @return \RO\Cmd\BlobGvgData
     */
    public function setDatas(\RO\Cmd\GvgData $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\GvgData[]
     */
    public function getDatasList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\GvgData $value
     * @return \RO\Cmd\BlobGvgData
     */
    public function addDatas(\RO\Cmd\GvgData $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <expiretime> has a value
     *
     * @return boolean
     */
    public function hasExpiretime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <expiretime> value
     *
     * @return \RO\Cmd\BlobGvgData
     */
    public function clearExpiretime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <expiretime> value
     *
     * @return int
     */
    public function getExpiretime(){
      return $this->_get(2);
    }
    
    /**
     * Set <expiretime> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobGvgData
     */
    public function setExpiretime( $value){
      return $this->_set(2, $value);
    }
  }
}

