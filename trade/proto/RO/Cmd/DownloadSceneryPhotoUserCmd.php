<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class DownloadSceneryPhotoUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_DOWNLOAD_SCENERY_PHOTO;
    
    /**  @var \RO\Cmd\UpyunUrl[]  */
    public $urls = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DownloadSceneryPhotoUserCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_DOWNLOAD_SCENERY_PHOTO;
      $descriptor->addField($f);

      // REPEATED MESSAGE urls = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "urls";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UpyunUrl';
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
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
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
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
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
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <urls> has a value
     *
     * @return boolean
     */
    public function hasUrls(){
      return $this->_has(3);
    }
    
    /**
     * Clear <urls> value
     *
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
     */
    public function clearUrls(){
      return $this->_clear(3);
    }
    
    /**
     * Get <urls> value
     *
     * @param int $idx
     * @return \RO\Cmd\UpyunUrl
     */
    public function getUrls($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <urls> value
     *
     * @param \RO\Cmd\UpyunUrl $value
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
     */
    public function setUrls(\RO\Cmd\UpyunUrl $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <urls>
     *
     * @return \RO\Cmd\UpyunUrl[]
     */
    public function getUrlsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <urls>
     *
     * @param \RO\Cmd\UpyunUrl $value
     * @return \RO\Cmd\DownloadSceneryPhotoUserCmd
     */
    public function addUrls(\RO\Cmd\UpyunUrl $value){
     return $this->_add(3, $value);
    }
  }
}

