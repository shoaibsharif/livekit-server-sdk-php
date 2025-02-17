<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SubscribedQuality</code>
 */
class SubscribedQuality extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.livekit.VideoQuality quality = 1;</code>
     */
    protected $quality = 0;
    /**
     * Generated from protobuf field <code>bool enabled = 2;</code>
     */
    protected $enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $quality
     *     @type bool $enabled
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.livekit.VideoQuality quality = 1;</code>
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Generated from protobuf field <code>.livekit.VideoQuality quality = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkEnum($var, \Livekit\VideoQuality::class);
        $this->quality = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 2;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

}

