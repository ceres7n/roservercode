<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobGuild extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\GuildInfo */
    public $info = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobGuild');

      // OPTIONAL MESSAGE info = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildInfo';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <info> has a value
     *
     * @return boolean
     */
    public function hasInfo(){
      return $this->_has(1);
    }
    
    /**
     * Clear <info> value
     *
     * @return \RO\Cmd\BlobGuild
     */
    public function clearInfo(){
      return $this->_clear(1);
    }
    
    /**
     * Get <info> value
     *
     * @return \RO\Cmd\GuildInfo
     */
    public function getInfo(){
      return $this->_get(1);
    }
    
    /**
     * Set <info> value
     *
     * @param \RO\Cmd\GuildInfo $value
     * @return \RO\Cmd\BlobGuild
     */
    public function setInfo(\RO\Cmd\GuildInfo $value){
      return $this->_set(1, $value);
    }
  }
}

