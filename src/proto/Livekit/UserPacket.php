<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.UserPacket</code>
 */
class UserPacket extends \Google\Protobuf\Internal\Message
{
    /**
     * participant ID of user that sent the message
     *
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     */
    private $participant_sid = '';
    /**
     * user defined payload
     *
     * Generated from protobuf field <code>bytes payload = 2;</code>
     */
    private $payload = '';
    /**
     * the ID of the participants who will receive the message (the message will be sent to all the people in the room if this variable is empty)
     *
     * Generated from protobuf field <code>repeated string destination_sids = 3;</code>
     */
    private $destination_sids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant_sid
     *           participant ID of user that sent the message
     *     @type string $payload
     *           user defined payload
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $destination_sids
     *           the ID of the participants who will receive the message (the message will be sent to all the people in the room if this variable is empty)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * participant ID of user that sent the message
     *
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     * @return string
     */
    public function getParticipantSid()
    {
        return $this->participant_sid;
    }

    /**
     * participant ID of user that sent the message
     *
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_sid = $var;

        return $this;
    }

    /**
     * user defined payload
     *
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * user defined payload
     *
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * the ID of the participants who will receive the message (the message will be sent to all the people in the room if this variable is empty)
     *
     * Generated from protobuf field <code>repeated string destination_sids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestinationSids()
    {
        return $this->destination_sids;
    }

    /**
     * the ID of the participants who will receive the message (the message will be sent to all the people in the room if this variable is empty)
     *
     * Generated from protobuf field <code>repeated string destination_sids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestinationSids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->destination_sids = $arr;

        return $this;
    }

}

