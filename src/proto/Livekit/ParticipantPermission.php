<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_room.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.ParticipantPermission</code>
 */
class ParticipantPermission extends \Google\Protobuf\Internal\Message
{
    /**
     * allow participant to subscribe to other tracks in the room
     *
     * Generated from protobuf field <code>bool can_subscribe = 1;</code>
     */
    private $can_subscribe = false;
    /**
     * allow participant to publish new tracks to room
     *
     * Generated from protobuf field <code>bool can_publish = 2;</code>
     */
    private $can_publish = false;
    /**
     * allow participant to publish data
     *
     * Generated from protobuf field <code>bool can_publish_data = 3;</code>
     */
    private $can_publish_data = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $can_subscribe
     *           allow participant to subscribe to other tracks in the room
     *     @type bool $can_publish
     *           allow participant to publish new tracks to room
     *     @type bool $can_publish_data
     *           allow participant to publish data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRoom::initOnce();
        parent::__construct($data);
    }

    /**
     * allow participant to subscribe to other tracks in the room
     *
     * Generated from protobuf field <code>bool can_subscribe = 1;</code>
     * @return bool
     */
    public function getCanSubscribe()
    {
        return $this->can_subscribe;
    }

    /**
     * allow participant to subscribe to other tracks in the room
     *
     * Generated from protobuf field <code>bool can_subscribe = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanSubscribe($var)
    {
        GPBUtil::checkBool($var);
        $this->can_subscribe = $var;

        return $this;
    }

    /**
     * allow participant to publish new tracks to room
     *
     * Generated from protobuf field <code>bool can_publish = 2;</code>
     * @return bool
     */
    public function getCanPublish()
    {
        return $this->can_publish;
    }

    /**
     * allow participant to publish new tracks to room
     *
     * Generated from protobuf field <code>bool can_publish = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanPublish($var)
    {
        GPBUtil::checkBool($var);
        $this->can_publish = $var;

        return $this;
    }

    /**
     * allow participant to publish data
     *
     * Generated from protobuf field <code>bool can_publish_data = 3;</code>
     * @return bool
     */
    public function getCanPublishData()
    {
        return $this->can_publish_data;
    }

    /**
     * allow participant to publish data
     *
     * Generated from protobuf field <code>bool can_publish_data = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanPublishData($var)
    {
        GPBUtil::checkBool($var);
        $this->can_publish_data = $var;

        return $this;
    }

}

