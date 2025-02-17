<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SessionDescription</code>
 */
class SessionDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * "answer" | "offer" | "pranswer" | "rollback"
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string sdp = 2;</code>
     */
    protected $sdp = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           "answer" | "offer" | "pranswer" | "rollback"
     *     @type string $sdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * "answer" | "offer" | "pranswer" | "rollback"
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * "answer" | "offer" | "pranswer" | "rollback"
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sdp = 2;</code>
     * @return string
     */
    public function getSdp()
    {
        return $this->sdp;
    }

    /**
     * Generated from protobuf field <code>string sdp = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSdp($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdp = $var;

        return $this;
    }

}

