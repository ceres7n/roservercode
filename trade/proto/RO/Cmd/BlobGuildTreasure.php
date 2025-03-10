<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class BlobGuildTreasure extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\GuildTreasure[]  */
    public $treasures = array();
    
    /**  @var \RO\Cmd\TreasureResult[]  */
    public $result = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobGuildTreasure');

      // REPEATED MESSAGE treasures = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "treasures";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildTreasure';
      $descriptor->addField($f);

      // REPEATED MESSAGE result = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\TreasureResult';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <treasures> has a value
     *
     * @return boolean
     */
    public function hasTreasures(){
      return $this->_has(1);
    }
    
    /**
     * Clear <treasures> value
     *
     * @return \RO\Cmd\BlobGuildTreasure
     */
    public function clearTreasures(){
      return $this->_clear(1);
    }
    
    /**
     * Get <treasures> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildTreasure
     */
    public function getTreasures($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <treasures> value
     *
     * @param \RO\Cmd\GuildTreasure $value
     * @return \RO\Cmd\BlobGuildTreasure
     */
    public function setTreasures(\RO\Cmd\GuildTreasure $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <treasures>
     *
     * @return \RO\Cmd\GuildTreasure[]
     */
    public function getTreasuresList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <treasures>
     *
     * @param \RO\Cmd\GuildTreasure $value
     * @return \RO\Cmd\BlobGuildTreasure
     */
    public function addTreasures(\RO\Cmd\GuildTreasure $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(2);
    }
    
    /**
     * Clear <result> value
     *
     * @return \RO\Cmd\BlobGuildTreasure
     */
    public function clearResult(){
      return $this->_clear(2);
    }
    
    /**
     * Get <result> value
     *
     * @param int $idx
     * @return \RO\Cmd\TreasureResult
     */
    public function getResult($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <result> value
     *
     * @param \RO\Cmd\TreasureResult $value
     * @return \RO\Cmd\BlobGuildTreasure
     */
    public function setResult(\RO\Cmd\TreasureResult $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <result>
     *
     * @return \RO\Cmd\TreasureResult[]
     */
    public function getResultList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <result>
     *
     * @param \RO\Cmd\TreasureResult $value
     * @return \RO\Cmd\BlobGuildTreasure
     */
    public function addResult(\RO\Cmd\TreasureResult $value){
     return $this->_add(2, $value);
    }
  }
}

