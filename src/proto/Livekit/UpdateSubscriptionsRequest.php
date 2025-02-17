<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_room.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.UpdateSubscriptionsRequest</code>
 */
class UpdateSubscriptionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string room = 1;</code>
     */
    protected $room = '';
    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     */
    protected $identity = '';
    /**
     * list of sids of tracks
     *
     * Generated from protobuf field <code>repeated string track_sids = 3;</code>
     */
    private $track_sids;
    /**
     * set to true to subscribe, false to unsubscribe from tracks
     *
     * Generated from protobuf field <code>bool subscribe = 4;</code>
     */
    protected $subscribe = false;
    /**
     * list of participants and their tracks
     *
     * Generated from protobuf field <code>repeated .livekit.ParticipantTracks participant_tracks = 5;</code>
     */
    private $participant_tracks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $room
     *     @type string $identity
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $track_sids
     *           list of sids of tracks
     *     @type bool $subscribe
     *           set to true to subscribe, false to unsubscribe from tracks
     *     @type array<\Livekit\ParticipantTracks>|\Google\Protobuf\Internal\RepeatedField $participant_tracks
     *           list of participants and their tracks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRoom::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string room = 1;</code>
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Generated from protobuf field <code>string room = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRoom($var)
    {
        GPBUtil::checkString($var, True);
        $this->room = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * list of sids of tracks
     *
     * Generated from protobuf field <code>repeated string track_sids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackSids()
    {
        return $this->track_sids;
    }

    /**
     * list of sids of tracks
     *
     * Generated from protobuf field <code>repeated string track_sids = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrackSids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->track_sids = $arr;

        return $this;
    }

    /**
     * set to true to subscribe, false to unsubscribe from tracks
     *
     * Generated from protobuf field <code>bool subscribe = 4;</code>
     * @return bool
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }

    /**
     * set to true to subscribe, false to unsubscribe from tracks
     *
     * Generated from protobuf field <code>bool subscribe = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSubscribe($var)
    {
        GPBUtil::checkBool($var);
        $this->subscribe = $var;

        return $this;
    }

    /**
     * list of participants and their tracks
     *
     * Generated from protobuf field <code>repeated .livekit.ParticipantTracks participant_tracks = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParticipantTracks()
    {
        return $this->participant_tracks;
    }

    /**
     * list of participants and their tracks
     *
     * Generated from protobuf field <code>repeated .livekit.ParticipantTracks participant_tracks = 5;</code>
     * @param array<\Livekit\ParticipantTracks>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParticipantTracks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\ParticipantTracks::class);
        $this->participant_tracks = $arr;

        return $this;
    }

}

