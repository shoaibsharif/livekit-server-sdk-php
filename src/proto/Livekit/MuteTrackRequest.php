<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.MuteTrackRequest</code>
 */
class MuteTrackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sid = 1;</code>
     */
    protected $sid = '';
    /**
     * Generated from protobuf field <code>bool muted = 2;</code>
     */
    protected $muted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sid
     *     @type bool $muted
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sid = 1;</code>
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Generated from protobuf field <code>string sid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->sid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool muted = 2;</code>
     * @return bool
     */
    public function getMuted()
    {
        return $this->muted;
    }

    /**
     * Generated from protobuf field <code>bool muted = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setMuted($var)
    {
        GPBUtil::checkBool($var);
        $this->muted = $var;

        return $this;
    }

}

