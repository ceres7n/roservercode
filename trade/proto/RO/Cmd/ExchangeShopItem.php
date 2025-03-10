<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionShop.proto

namespace RO\Cmd {

  class ExchangeShopItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = null;
    
    /**  @var int - \RO\Cmd\EExchangeStatusType */
    public $status = \RO\Cmd\EExchangeStatusType::EEXCHANGESTATUSTYPE_OK;
    
    /**  @var int */
    public $progress = null;
    
    /**  @var int */
    public $exchange_count = null;
    
    /**  @var int */
    public $left_time = null;
    
    /**  @var int */
    public $delay_time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ExchangeShopItem');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM status = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EExchangeStatusType';
      $f->default   = \RO\Cmd\EExchangeStatusType::EEXCHANGESTATUSTYPE_OK;
      $descriptor->addField($f);

      // OPTIONAL UINT32 progress = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "progress";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 exchange_count = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "exchange_count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 left_time = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "left_time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 delay_time = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "delay_time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(2);
    }
    
    /**
     * Clear <status> value
     *
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function clearStatus(){
      return $this->_clear(2);
    }
    
    /**
     * Get <status> value
     *
     * @return int - \RO\Cmd\EExchangeStatusType
     */
    public function getStatus(){
      return $this->_get(2);
    }
    
    /**
     * Set <status> value
     *
     * @param int - \RO\Cmd\EExchangeStatusType $value
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function setStatus( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <progress> has a value
     *
     * @return boolean
     */
    public function hasProgress(){
      return $this->_has(3);
    }
    
    /**
     * Clear <progress> value
     *
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function clearProgress(){
      return $this->_clear(3);
    }
    
    /**
     * Get <progress> value
     *
     * @return int
     */
    public function getProgress(){
      return $this->_get(3);
    }
    
    /**
     * Set <progress> value
     *
     * @param int $value
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function setProgress( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <exchange_count> has a value
     *
     * @return boolean
     */
    public function hasExchangeCount(){
      return $this->_has(4);
    }
    
    /**
     * Clear <exchange_count> value
     *
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function clearExchangeCount(){
      return $this->_clear(4);
    }
    
    /**
     * Get <exchange_count> value
     *
     * @return int
     */
    public function getExchangeCount(){
      return $this->_get(4);
    }
    
    /**
     * Set <exchange_count> value
     *
     * @param int $value
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function setExchangeCount( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <left_time> has a value
     *
     * @return boolean
     */
    public function hasLeftTime(){
      return $this->_has(5);
    }
    
    /**
     * Clear <left_time> value
     *
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function clearLeftTime(){
      return $this->_clear(5);
    }
    
    /**
     * Get <left_time> value
     *
     * @return int
     */
    public function getLeftTime(){
      return $this->_get(5);
    }
    
    /**
     * Set <left_time> value
     *
     * @param int $value
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function setLeftTime( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delay_time> has a value
     *
     * @return boolean
     */
    public function hasDelayTime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <delay_time> value
     *
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function clearDelayTime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <delay_time> value
     *
     * @return int
     */
    public function getDelayTime(){
      return $this->_get(6);
    }
    
    /**
     * Set <delay_time> value
     *
     * @param int $value
     * @return \RO\Cmd\ExchangeShopItem
     */
    public function setDelayTime( $value){
      return $this->_set(6, $value);
    }
  }
}

