<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class RaidMapData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $raidid = null;
    
    /**  @var int */
    public $index = null;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var int */
    public $guildid = null;
    
    /**  @var int */
    public $guildlv = null;
    
    /**  @var int */
    public $teamid = null;
    
    /**  @var int */
    public $restrict = null;
    
    /**  @var int[]  */
    public $memberlist = array();
    
    /**  @var \RO\Cmd\ScenePos */
    public $imagecenter = null;
    
    /**  @var int */
    public $imagerange = null;
    
    /**  @var \RO\Cmd\ScenePos */
    public $enterpos = null;
    
    /**  @var int */
    public $sealid = 0;
    
    /**  @var int */
    public $follow = 0;
    
    /**  @var int */
    public $dojoid = 0;
    
    /**  @var int */
    public $layer = 0;
    
    /**  @var int */
    public $guildraidindex = 0;
    
    /**  @var int */
    public $roomid = null;
    
    /**  @var \RO\Cmd\GuildInfo */
    public $guildinfo = null;
    
    /**  @var int */
    public $npcid = null;
    
    /**  @var int */
    public $nomonsterlayer = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.RaidMapData');

      // OPTIONAL UINT32 raidid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "raidid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 index = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "index";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guildid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "guildid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 guildlv = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "guildlv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 teamid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "teamid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 restrict = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "restrict";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED UINT64 memberlist = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "memberlist";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE imagecenter = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "imagecenter";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      // OPTIONAL UINT32 imagerange = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "imagerange";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE enterpos = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "enterpos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      // OPTIONAL UINT32 sealid = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "sealid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 follow = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "follow";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dojoid = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "dojoid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 layer = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "layer";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 guildraidindex = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "guildraidindex";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 roomid = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "roomid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE guildinfo = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "guildinfo";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildInfo';
      $descriptor->addField($f);

      // OPTIONAL UINT32 npcid = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "npcid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 nomonsterlayer = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "nomonsterlayer";
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
     * Check if <raidid> has a value
     *
     * @return boolean
     */
    public function hasRaidid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <raidid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearRaidid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <raidid> value
     *
     * @return int
     */
    public function getRaidid(){
      return $this->_get(1);
    }
    
    /**
     * Set <raidid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setRaidid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <index> has a value
     *
     * @return boolean
     */
    public function hasIndex(){
      return $this->_has(2);
    }
    
    /**
     * Clear <index> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearIndex(){
      return $this->_clear(2);
    }
    
    /**
     * Get <index> value
     *
     * @return int
     */
    public function getIndex(){
      return $this->_get(2);
    }
    
    /**
     * Set <index> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setIndex( $value){
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
     * @return \RO\Cmd\RaidMapData
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
     * @return \RO\Cmd\RaidMapData
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <guildid> has a value
     *
     * @return boolean
     */
    public function hasGuildid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <guildid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearGuildid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <guildid> value
     *
     * @return int
     */
    public function getGuildid(){
      return $this->_get(4);
    }
    
    /**
     * Set <guildid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setGuildid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <guildlv> has a value
     *
     * @return boolean
     */
    public function hasGuildlv(){
      return $this->_has(5);
    }
    
    /**
     * Clear <guildlv> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearGuildlv(){
      return $this->_clear(5);
    }
    
    /**
     * Get <guildlv> value
     *
     * @return int
     */
    public function getGuildlv(){
      return $this->_get(5);
    }
    
    /**
     * Set <guildlv> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setGuildlv( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <teamid> has a value
     *
     * @return boolean
     */
    public function hasTeamid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <teamid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearTeamid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <teamid> value
     *
     * @return int
     */
    public function getTeamid(){
      return $this->_get(6);
    }
    
    /**
     * Set <teamid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setTeamid( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <restrict> has a value
     *
     * @return boolean
     */
    public function hasRestrict(){
      return $this->_has(7);
    }
    
    /**
     * Clear <restrict> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearRestrict(){
      return $this->_clear(7);
    }
    
    /**
     * Get <restrict> value
     *
     * @return int
     */
    public function getRestrict(){
      return $this->_get(7);
    }
    
    /**
     * Set <restrict> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setRestrict( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <memberlist> has a value
     *
     * @return boolean
     */
    public function hasMemberlist(){
      return $this->_has(8);
    }
    
    /**
     * Clear <memberlist> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearMemberlist(){
      return $this->_clear(8);
    }
    
    /**
     * Get <memberlist> value
     *
     * @param int $idx
     * @return int
     */
    public function getMemberlist($idx = NULL){
      return $this->_get(8, $idx);
    }
    
    /**
     * Set <memberlist> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setMemberlist( $value, $idx = NULL){
      return $this->_set(8, $value, $idx);
    }
    
    /**
     * Get all elements of <memberlist>
     *
     * @return int[]
     */
    public function getMemberlistList(){
     return $this->_get(8);
    }
    
    /**
     * Add a new element to <memberlist>
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function addMemberlist( $value){
     return $this->_add(8, $value);
    }
    
    /**
     * Check if <imagecenter> has a value
     *
     * @return boolean
     */
    public function hasImagecenter(){
      return $this->_has(9);
    }
    
    /**
     * Clear <imagecenter> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearImagecenter(){
      return $this->_clear(9);
    }
    
    /**
     * Get <imagecenter> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getImagecenter(){
      return $this->_get(9);
    }
    
    /**
     * Set <imagecenter> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setImagecenter(\RO\Cmd\ScenePos $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <imagerange> has a value
     *
     * @return boolean
     */
    public function hasImagerange(){
      return $this->_has(10);
    }
    
    /**
     * Clear <imagerange> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearImagerange(){
      return $this->_clear(10);
    }
    
    /**
     * Get <imagerange> value
     *
     * @return int
     */
    public function getImagerange(){
      return $this->_get(10);
    }
    
    /**
     * Set <imagerange> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setImagerange( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <enterpos> has a value
     *
     * @return boolean
     */
    public function hasEnterpos(){
      return $this->_has(11);
    }
    
    /**
     * Clear <enterpos> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearEnterpos(){
      return $this->_clear(11);
    }
    
    /**
     * Get <enterpos> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getEnterpos(){
      return $this->_get(11);
    }
    
    /**
     * Set <enterpos> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setEnterpos(\RO\Cmd\ScenePos $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <sealid> has a value
     *
     * @return boolean
     */
    public function hasSealid(){
      return $this->_has(12);
    }
    
    /**
     * Clear <sealid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearSealid(){
      return $this->_clear(12);
    }
    
    /**
     * Get <sealid> value
     *
     * @return int
     */
    public function getSealid(){
      return $this->_get(12);
    }
    
    /**
     * Set <sealid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setSealid( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <follow> has a value
     *
     * @return boolean
     */
    public function hasFollow(){
      return $this->_has(13);
    }
    
    /**
     * Clear <follow> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearFollow(){
      return $this->_clear(13);
    }
    
    /**
     * Get <follow> value
     *
     * @return int
     */
    public function getFollow(){
      return $this->_get(13);
    }
    
    /**
     * Set <follow> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setFollow( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <dojoid> has a value
     *
     * @return boolean
     */
    public function hasDojoid(){
      return $this->_has(14);
    }
    
    /**
     * Clear <dojoid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearDojoid(){
      return $this->_clear(14);
    }
    
    /**
     * Get <dojoid> value
     *
     * @return int
     */
    public function getDojoid(){
      return $this->_get(14);
    }
    
    /**
     * Set <dojoid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setDojoid( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <layer> has a value
     *
     * @return boolean
     */
    public function hasLayer(){
      return $this->_has(15);
    }
    
    /**
     * Clear <layer> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearLayer(){
      return $this->_clear(15);
    }
    
    /**
     * Get <layer> value
     *
     * @return int
     */
    public function getLayer(){
      return $this->_get(15);
    }
    
    /**
     * Set <layer> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setLayer( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <guildraidindex> has a value
     *
     * @return boolean
     */
    public function hasGuildraidindex(){
      return $this->_has(16);
    }
    
    /**
     * Clear <guildraidindex> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearGuildraidindex(){
      return $this->_clear(16);
    }
    
    /**
     * Get <guildraidindex> value
     *
     * @return int
     */
    public function getGuildraidindex(){
      return $this->_get(16);
    }
    
    /**
     * Set <guildraidindex> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setGuildraidindex( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <roomid> has a value
     *
     * @return boolean
     */
    public function hasRoomid(){
      return $this->_has(17);
    }
    
    /**
     * Clear <roomid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearRoomid(){
      return $this->_clear(17);
    }
    
    /**
     * Get <roomid> value
     *
     * @return int
     */
    public function getRoomid(){
      return $this->_get(17);
    }
    
    /**
     * Set <roomid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setRoomid( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <guildinfo> has a value
     *
     * @return boolean
     */
    public function hasGuildinfo(){
      return $this->_has(18);
    }
    
    /**
     * Clear <guildinfo> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearGuildinfo(){
      return $this->_clear(18);
    }
    
    /**
     * Get <guildinfo> value
     *
     * @return \RO\Cmd\GuildInfo
     */
    public function getGuildinfo(){
      return $this->_get(18);
    }
    
    /**
     * Set <guildinfo> value
     *
     * @param \RO\Cmd\GuildInfo $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setGuildinfo(\RO\Cmd\GuildInfo $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <npcid> has a value
     *
     * @return boolean
     */
    public function hasNpcid(){
      return $this->_has(19);
    }
    
    /**
     * Clear <npcid> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearNpcid(){
      return $this->_clear(19);
    }
    
    /**
     * Get <npcid> value
     *
     * @return int
     */
    public function getNpcid(){
      return $this->_get(19);
    }
    
    /**
     * Set <npcid> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setNpcid( $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <nomonsterlayer> has a value
     *
     * @return boolean
     */
    public function hasNomonsterlayer(){
      return $this->_has(20);
    }
    
    /**
     * Clear <nomonsterlayer> value
     *
     * @return \RO\Cmd\RaidMapData
     */
    public function clearNomonsterlayer(){
      return $this->_clear(20);
    }
    
    /**
     * Get <nomonsterlayer> value
     *
     * @return int
     */
    public function getNomonsterlayer(){
      return $this->_get(20);
    }
    
    /**
     * Set <nomonsterlayer> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidMapData
     */
    public function setNomonsterlayer( $value){
      return $this->_set(20, $value);
    }
  }
}

