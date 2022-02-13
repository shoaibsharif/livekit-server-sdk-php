<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * new DataPacket API
 *
 * Generated from protobuf message <code>livekit.DataPacket</code>
 */
class DataPacket extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.livekit.DataPacket.Kind kind = 1;</code>
     */
    private $kind = 0;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *     @type \Livekit\UserPacket $user
     *     @type \Livekit\ActiveSpeakerUpdate $speaker
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.livekit.DataPacket.Kind kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>.livekit.DataPacket.Kind kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Livekit\DataPacket_Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.UserPacket user = 2;</code>
     * @return \Livekit\UserPacket
     */
    public function getUser()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.livekit.UserPacket user = 2;</code>
     * @param \Livekit\UserPacket $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Livekit\UserPacket::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.ActiveSpeakerUpdate speaker = 3;</code>
     * @return \Livekit\ActiveSpeakerUpdate
     */
    public function getSpeaker()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.livekit.ActiveSpeakerUpdate speaker = 3;</code>
     * @param \Livekit\ActiveSpeakerUpdate $var
     * @return $this
     */
    public function setSpeaker($var)
    {
        GPBUtil::checkMessage($var, \Livekit\ActiveSpeakerUpdate::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

