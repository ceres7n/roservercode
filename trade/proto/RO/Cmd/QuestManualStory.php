<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneQuest.proto

namespace RO\Cmd {

  class QuestManualStory extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\QuestPreview[]  */
    public $previews = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QuestManualStory');

      // REPEATED MESSAGE previews = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "previews";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestPreview';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <previews> has a value
     *
     * @return boolean
     */
    public function hasPreviews(){
      return $this->_has(1);
    }
    
    /**
     * Clear <previews> value
     *
     * @return \RO\Cmd\QuestManualStory
     */
    public function clearPreviews(){
      return $this->_clear(1);
    }
    
    /**
     * Get <previews> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestPreview
     */
    public function getPreviews($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <previews> value
     *
     * @param \RO\Cmd\QuestPreview $value
     * @return \RO\Cmd\QuestManualStory
     */
    public function setPreviews(\RO\Cmd\QuestPreview $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <previews>
     *
     * @return \RO\Cmd\QuestPreview[]
     */
    public function getPreviewsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <previews>
     *
     * @param \RO\Cmd\QuestPreview $value
     * @return \RO\Cmd\QuestManualStory
     */
    public function addPreviews(\RO\Cmd\QuestPreview $value){
     return $this->_add(1, $value);
    }
  }
}

