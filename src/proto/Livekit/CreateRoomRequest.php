<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_room.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.CreateRoomRequest</code>
 */
class CreateRoomRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * name of the room
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * number of seconds to keep the room open if no one joins
     *
     * Generated from protobuf field <code>uint32 empty_timeout = 2;</code>
     */
    private $empty_timeout = 0;
    /**
     * limit number of participants that can be in a room
     *
     * Generated from protobuf field <code>uint32 max_participants = 3;</code>
     */
    private $max_participants = 0;
    /**
     * override the node room is allocated to, for debugging
     *
     * Generated from protobuf field <code>string node_id = 4;</code>
     */
    private $node_id = '';
    /**
     * metadata of room
     *
     * Generated from protobuf field <code>string metadata = 5;</code>
     */
    private $metadata = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           name of the room
     *     @type int $empty_timeout
     *           number of seconds to keep the room open if no one joins
     *     @type int $max_participants
     *           limit number of participants that can be in a room
     *     @type string $node_id
     *           override the node room is allocated to, for debugging
     *     @type string $metadata
     *           metadata of room
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRoom::initOnce();
        parent::__construct($data);
    }

    /**
     * name of the room
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * name of the room
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * number of seconds to keep the room open if no one joins
     *
     * Generated from protobuf field <code>uint32 empty_timeout = 2;</code>
     * @return int
     */
    public function getEmptyTimeout()
    {
        return $this->empty_timeout;
    }

    /**
     * number of seconds to keep the room open if no one joins
     *
     * Generated from protobuf field <code>uint32 empty_timeout = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEmptyTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->empty_timeout = $var;

        return $this;
    }

    /**
     * limit number of participants that can be in a room
     *
     * Generated from protobuf field <code>uint32 max_participants = 3;</code>
     * @return int
     */
    public function getMaxParticipants()
    {
        return $this->max_participants;
    }

    /**
     * limit number of participants that can be in a room
     *
     * Generated from protobuf field <code>uint32 max_participants = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxParticipants($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_participants = $var;

        return $this;
    }

    /**
     * override the node room is allocated to, for debugging
     *
     * Generated from protobuf field <code>string node_id = 4;</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * override the node room is allocated to, for debugging
     *
     * Generated from protobuf field <code>string node_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_id = $var;

        return $this;
    }

    /**
     * metadata of room
     *
     * Generated from protobuf field <code>string metadata = 5;</code>
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * metadata of room
     *
     * Generated from protobuf field <code>string metadata = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata = $var;

        return $this;
    }

}

