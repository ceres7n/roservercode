<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class GetTradeLogSessionCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::SESSIONPARAM_GET_TRADELOG;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $id = 0;
    
    /**  @var int - \RO\Cmd\EOperType */
    public $logtype = null;
    
    /**  @var \RO\Cmd\ItemInfo */
    public $item = null;
    
    /**  @var \RO\Cmd\ItemData */
    public $itemData = null;
    
    /**  @var boolean */
    public $success = null;
    
    /**  @var int */
    public $sell_item_id = null;
    
    /**  @var int */
    public $sell_price = null;
    
    /**  @var int */
    public $sell_count = null;
    
    /**  @var int */
    public $refine_lv = null;
    
    /**  @var int */
    public $ret_cost = null;
    
    /**  @var int - \RO\Cmd\ETradeType */
    public $trade_type = null;
    
    /**  @var int */
    public $tax = null;
    
    /**  @var int */
    public $quota = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GetTradeLogSessionCmd');

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
      $f->default   = \RO\Cmd\SessionParam::SESSIONPARAM_GET_TRADELOG;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM logtype = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "logtype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EOperType';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "item";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemInfo';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE itemData = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "itemData";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemData';
      $descriptor->addField($f);

      // OPTIONAL BOOL success = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "success";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sell_item_id = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "sell_item_id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 sell_price = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "sell_price";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sell_count = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "sell_count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 refine_lv = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "refine_lv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ret_cost = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "ret_cost";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM trade_type = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "trade_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETradeType';
      $descriptor->addField($f);

      // OPTIONAL UINT64 tax = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "tax";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 quota = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "quota";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\GetTradeLogSessionCmd
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
     * @return \RO\Cmd\GetTradeLogSessionCmd
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
     * @return \RO\Cmd\GetTradeLogSessionCmd
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
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(4);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setId( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <logtype> has a value
     *
     * @return boolean
     */
    public function hasLogtype(){
      return $this->_has(5);
    }
    
    /**
     * Clear <logtype> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearLogtype(){
      return $this->_clear(5);
    }
    
    /**
     * Get <logtype> value
     *
     * @return int - \RO\Cmd\EOperType
     */
    public function getLogtype(){
      return $this->_get(5);
    }
    
    /**
     * Set <logtype> value
     *
     * @param int - \RO\Cmd\EOperType $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setLogtype( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <item> has a value
     *
     * @return boolean
     */
    public function hasItem(){
      return $this->_has(6);
    }
    
    /**
     * Clear <item> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearItem(){
      return $this->_clear(6);
    }
    
    /**
     * Get <item> value
     *
     * @return \RO\Cmd\ItemInfo
     */
    public function getItem(){
      return $this->_get(6);
    }
    
    /**
     * Set <item> value
     *
     * @param \RO\Cmd\ItemInfo $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setItem(\RO\Cmd\ItemInfo $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <itemData> has a value
     *
     * @return boolean
     */
    public function hasItemData(){
      return $this->_has(7);
    }
    
    /**
     * Clear <itemData> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearItemData(){
      return $this->_clear(7);
    }
    
    /**
     * Get <itemData> value
     *
     * @return \RO\Cmd\ItemData
     */
    public function getItemData(){
      return $this->_get(7);
    }
    
    /**
     * Set <itemData> value
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setItemData(\RO\Cmd\ItemData $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <success> has a value
     *
     * @return boolean
     */
    public function hasSuccess(){
      return $this->_has(8);
    }
    
    /**
     * Clear <success> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearSuccess(){
      return $this->_clear(8);
    }
    
    /**
     * Get <success> value
     *
     * @return boolean
     */
    public function getSuccess(){
      return $this->_get(8);
    }
    
    /**
     * Set <success> value
     *
     * @param boolean $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setSuccess( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <sell_item_id> has a value
     *
     * @return boolean
     */
    public function hasSellItemId(){
      return $this->_has(9);
    }
    
    /**
     * Clear <sell_item_id> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearSellItemId(){
      return $this->_clear(9);
    }
    
    /**
     * Get <sell_item_id> value
     *
     * @return int
     */
    public function getSellItemId(){
      return $this->_get(9);
    }
    
    /**
     * Set <sell_item_id> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setSellItemId( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <sell_price> has a value
     *
     * @return boolean
     */
    public function hasSellPrice(){
      return $this->_has(10);
    }
    
    /**
     * Clear <sell_price> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearSellPrice(){
      return $this->_clear(10);
    }
    
    /**
     * Get <sell_price> value
     *
     * @return int
     */
    public function getSellPrice(){
      return $this->_get(10);
    }
    
    /**
     * Set <sell_price> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setSellPrice( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <sell_count> has a value
     *
     * @return boolean
     */
    public function hasSellCount(){
      return $this->_has(11);
    }
    
    /**
     * Clear <sell_count> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearSellCount(){
      return $this->_clear(11);
    }
    
    /**
     * Get <sell_count> value
     *
     * @return int
     */
    public function getSellCount(){
      return $this->_get(11);
    }
    
    /**
     * Set <sell_count> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setSellCount( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <refine_lv> has a value
     *
     * @return boolean
     */
    public function hasRefineLv(){
      return $this->_has(12);
    }
    
    /**
     * Clear <refine_lv> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearRefineLv(){
      return $this->_clear(12);
    }
    
    /**
     * Get <refine_lv> value
     *
     * @return int
     */
    public function getRefineLv(){
      return $this->_get(12);
    }
    
    /**
     * Set <refine_lv> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setRefineLv( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <ret_cost> has a value
     *
     * @return boolean
     */
    public function hasRetCost(){
      return $this->_has(13);
    }
    
    /**
     * Clear <ret_cost> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearRetCost(){
      return $this->_clear(13);
    }
    
    /**
     * Get <ret_cost> value
     *
     * @return int
     */
    public function getRetCost(){
      return $this->_get(13);
    }
    
    /**
     * Set <ret_cost> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setRetCost( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <trade_type> has a value
     *
     * @return boolean
     */
    public function hasTradeType(){
      return $this->_has(14);
    }
    
    /**
     * Clear <trade_type> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearTradeType(){
      return $this->_clear(14);
    }
    
    /**
     * Get <trade_type> value
     *
     * @return int - \RO\Cmd\ETradeType
     */
    public function getTradeType(){
      return $this->_get(14);
    }
    
    /**
     * Set <trade_type> value
     *
     * @param int - \RO\Cmd\ETradeType $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setTradeType( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <tax> has a value
     *
     * @return boolean
     */
    public function hasTax(){
      return $this->_has(15);
    }
    
    /**
     * Clear <tax> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearTax(){
      return $this->_clear(15);
    }
    
    /**
     * Get <tax> value
     *
     * @return int
     */
    public function getTax(){
      return $this->_get(15);
    }
    
    /**
     * Set <tax> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setTax( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <quota> has a value
     *
     * @return boolean
     */
    public function hasQuota(){
      return $this->_has(16);
    }
    
    /**
     * Clear <quota> value
     *
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function clearQuota(){
      return $this->_clear(16);
    }
    
    /**
     * Get <quota> value
     *
     * @return int
     */
    public function getQuota(){
      return $this->_get(16);
    }
    
    /**
     * Set <quota> value
     *
     * @param int $value
     * @return \RO\Cmd\GetTradeLogSessionCmd
     */
    public function setQuota( $value){
      return $this->_set(16, $value);
    }
  }
}

