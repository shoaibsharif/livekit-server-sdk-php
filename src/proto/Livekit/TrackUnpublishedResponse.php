<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.TrackUnpublishedResponse</code>
 */
class TrackUnpublishedResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string track_sid = 1;</code>
     */
    protected $track_sid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $track_sid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string track_sid = 1;</code>
     * @return string
     */
    public function getTrackSid()
    {
        return $this->track_sid;
    }

    /**
     * Generated from protobuf field <code>string track_sid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->track_sid = $var;

        return $this;
    }

}

