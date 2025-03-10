<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobShortcut extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\ShortcutItem[]  */
    public $cut = array();
    
    /**  @var int[]  */
    public $firstauto = array();
    
    /**  @var int */
    public $version = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobShortcut');

      // REPEATED MESSAGE cut = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cut";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ShortcutItem';
      $descriptor->addField($f);

      // REPEATED UINT32 firstauto = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "firstauto";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT32 version = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "version";
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
     * Check if <cut> has a value
     *
     * @return boolean
     */
    public function hasCut(){
      return $this->_has(1);
    }
    
    /**
     * Clear <cut> value
     *
     * @return \RO\Cmd\BlobShortcut
     */
    public function clearCut(){
      return $this->_clear(1);
    }
    
    /**
     * Get <cut> value
     *
     * @param int $idx
     * @return \RO\Cmd\ShortcutItem
     */
    public function getCut($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <cut> value
     *
     * @param \RO\Cmd\ShortcutItem $value
     * @return \RO\Cmd\BlobShortcut
     */
    public function setCut(\RO\Cmd\ShortcutItem $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <cut>
     *
     * @return \RO\Cmd\ShortcutItem[]
     */
    public function getCutList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <cut>
     *
     * @param \RO\Cmd\ShortcutItem $value
     * @return \RO\Cmd\BlobShortcut
     */
    public function addCut(\RO\Cmd\ShortcutItem $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <firstauto> has a value
     *
     * @return boolean
     */
    public function hasFirstauto(){
      return $this->_has(2);
    }
    
    /**
     * Clear <firstauto> value
     *
     * @return \RO\Cmd\BlobShortcut
     */
    public function clearFirstauto(){
      return $this->_clear(2);
    }
    
    /**
     * Get <firstauto> value
     *
     * @param int $idx
     * @return int
     */
    public function getFirstauto($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <firstauto> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobShortcut
     */
    public function setFirstauto( $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <firstauto>
     *
     * @return int[]
     */
    public function getFirstautoList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <firstauto>
     *
     * @param int $value
     * @return \RO\Cmd\BlobShortcut
     */
    public function addFirstauto( $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(3);
    }
    
    /**
     * Clear <version> value
     *
     * @return \RO\Cmd\BlobShortcut
     */
    public function clearVersion(){
      return $this->_clear(3);
    }
    
    /**
     * Get <version> value
     *
     * @return int
     */
    public function getVersion(){
      return $this->_get(3);
    }
    
    /**
     * Set <version> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobShortcut
     */
    public function setVersion( $value){
      return $this->_set(3, $value);
    }
  }
}

