<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.RegionSettings</code>
 */
class RegionSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .livekit.RegionInfo regions = 1;</code>
     */
    private $regions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Livekit\RegionInfo>|\Google\Protobuf\Internal\RepeatedField $regions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.RegionInfo regions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.RegionInfo regions = 1;</code>
     * @param array<\Livekit\RegionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\RegionInfo::class);
        $this->regions = $arr;

        return $this;
    }

}

