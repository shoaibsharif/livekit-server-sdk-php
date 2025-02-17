<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.TrackPermission</code>
 */
class TrackPermission extends \Google\Protobuf\Internal\Message
{
    /**
     * permission could be granted either by participant sid or identity
     *
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     */
    protected $participant_sid = '';
    /**
     * Generated from protobuf field <code>bool all_tracks = 2;</code>
     */
    protected $all_tracks = false;
    /**
     * Generated from protobuf field <code>repeated string track_sids = 3;</code>
     */
    private $track_sids;
    /**
     * Generated from protobuf field <code>string participant_identity = 4;</code>
     */
    protected $participant_identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant_sid
     *           permission could be granted either by participant sid or identity
     *     @type bool $all_tracks
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $track_sids
     *     @type string $participant_identity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * permission could be granted either by participant sid or identity
     *
     * Generated from protobuf field <code>string participant_sid = 1;</code>
     * @return string
     */
    public function getParticipantSid()
    {
        return $this->participant_sid;
    }

    /**
     * permission could be granted either by participant sid or identity
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
     * Generated from protobuf field <code>bool all_tracks = 2;</code>
     * @return bool
     */
    public function getAllTracks()
    {
        return $this->all_tracks;
    }

    /**
     * Generated from protobuf field <code>bool all_tracks = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllTracks($var)
    {
        GPBUtil::checkBool($var);
        $this->all_tracks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string track_sids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackSids()
    {
        return $this->track_sids;
    }

    /**
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
     * Generated from protobuf field <code>string participant_identity = 4;</code>
     * @return string
     */
    public function getParticipantIdentity()
    {
        return $this->participant_identity;
    }

    /**
     * Generated from protobuf field <code>string participant_identity = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_identity = $var;

        return $this;
    }

}

