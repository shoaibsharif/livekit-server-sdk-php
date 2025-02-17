<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.AddTrackRequest</code>
 */
class AddTrackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * client ID of track, to match it when RTC track is received
     *
     * Generated from protobuf field <code>string cid = 1;</code>
     */
    protected $cid = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.livekit.TrackType type = 3;</code>
     */
    protected $type = 0;
    /**
     * to be deprecated in favor of layers
     *
     * Generated from protobuf field <code>uint32 width = 4;</code>
     */
    protected $width = 0;
    /**
     * Generated from protobuf field <code>uint32 height = 5;</code>
     */
    protected $height = 0;
    /**
     * true to add track and initialize to muted
     *
     * Generated from protobuf field <code>bool muted = 6;</code>
     */
    protected $muted = false;
    /**
     * true if DTX (Discontinuous Transmission) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_dtx = 7;</code>
     */
    protected $disable_dtx = false;
    /**
     * Generated from protobuf field <code>.livekit.TrackSource source = 8;</code>
     */
    protected $source = 0;
    /**
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 9;</code>
     */
    private $layers;
    /**
     * Generated from protobuf field <code>repeated .livekit.SimulcastCodec simulcast_codecs = 10;</code>
     */
    private $simulcast_codecs;
    /**
     * server ID of track, publish new codec to exist track
     *
     * Generated from protobuf field <code>string sid = 11;</code>
     */
    protected $sid = '';
    /**
     * Generated from protobuf field <code>bool stereo = 12;</code>
     */
    protected $stereo = false;
    /**
     * true if RED (Redundant Encoding) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_red = 13;</code>
     */
    protected $disable_red = false;
    /**
     * Generated from protobuf field <code>.livekit.Encryption.Type encryption = 14;</code>
     */
    protected $encryption = 0;
    /**
     * which stream the track belongs to, used to group tracks together.
     * if not specified, server will infer it from track source to bundle camera/microphone, screenshare/audio together
     *
     * Generated from protobuf field <code>string stream = 15;</code>
     */
    protected $stream = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cid
     *           client ID of track, to match it when RTC track is received
     *     @type string $name
     *     @type int $type
     *     @type int $width
     *           to be deprecated in favor of layers
     *     @type int $height
     *     @type bool $muted
     *           true to add track and initialize to muted
     *     @type bool $disable_dtx
     *           true if DTX (Discontinuous Transmission) is disabled for audio
     *     @type int $source
     *     @type array<\Livekit\VideoLayer>|\Google\Protobuf\Internal\RepeatedField $layers
     *     @type array<\Livekit\SimulcastCodec>|\Google\Protobuf\Internal\RepeatedField $simulcast_codecs
     *     @type string $sid
     *           server ID of track, publish new codec to exist track
     *     @type bool $stereo
     *     @type bool $disable_red
     *           true if RED (Redundant Encoding) is disabled for audio
     *     @type int $encryption
     *     @type string $stream
     *           which stream the track belongs to, used to group tracks together.
     *           if not specified, server will infer it from track source to bundle camera/microphone, screenshare/audio together
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRtc::initOnce();
        parent::__construct($data);
    }

    /**
     * client ID of track, to match it when RTC track is received
     *
     * Generated from protobuf field <code>string cid = 1;</code>
     * @return string
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * client ID of track, to match it when RTC track is received
     *
     * Generated from protobuf field <code>string cid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCid($var)
    {
        GPBUtil::checkString($var, True);
        $this->cid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Generated from protobuf field <code>.livekit.TrackType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Livekit\TrackType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * to be deprecated in favor of layers
     *
     * Generated from protobuf field <code>uint32 width = 4;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * to be deprecated in favor of layers
     *
     * Generated from protobuf field <code>uint32 width = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkUint32($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 height = 5;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>uint32 height = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * true to add track and initialize to muted
     *
     * Generated from protobuf field <code>bool muted = 6;</code>
     * @return bool
     */
    public function getMuted()
    {
        return $this->muted;
    }

    /**
     * true to add track and initialize to muted
     *
     * Generated from protobuf field <code>bool muted = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setMuted($var)
    {
        GPBUtil::checkBool($var);
        $this->muted = $var;

        return $this;
    }

    /**
     * true if DTX (Discontinuous Transmission) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_dtx = 7;</code>
     * @return bool
     */
    public function getDisableDtx()
    {
        return $this->disable_dtx;
    }

    /**
     * true if DTX (Discontinuous Transmission) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_dtx = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableDtx($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_dtx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackSource source = 8;</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>.livekit.TrackSource source = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \Livekit\TrackSource::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLayers()
    {
        return $this->layers;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.VideoLayer layers = 9;</code>
     * @param array<\Livekit\VideoLayer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\VideoLayer::class);
        $this->layers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.SimulcastCodec simulcast_codecs = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSimulcastCodecs()
    {
        return $this->simulcast_codecs;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.SimulcastCodec simulcast_codecs = 10;</code>
     * @param array<\Livekit\SimulcastCodec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSimulcastCodecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\SimulcastCodec::class);
        $this->simulcast_codecs = $arr;

        return $this;
    }

    /**
     * server ID of track, publish new codec to exist track
     *
     * Generated from protobuf field <code>string sid = 11;</code>
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * server ID of track, publish new codec to exist track
     *
     * Generated from protobuf field <code>string sid = 11;</code>
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
     * Generated from protobuf field <code>bool stereo = 12;</code>
     * @return bool
     */
    public function getStereo()
    {
        return $this->stereo;
    }

    /**
     * Generated from protobuf field <code>bool stereo = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setStereo($var)
    {
        GPBUtil::checkBool($var);
        $this->stereo = $var;

        return $this;
    }

    /**
     * true if RED (Redundant Encoding) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_red = 13;</code>
     * @return bool
     */
    public function getDisableRed()
    {
        return $this->disable_red;
    }

    /**
     * true if RED (Redundant Encoding) is disabled for audio
     *
     * Generated from protobuf field <code>bool disable_red = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableRed($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_red = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.Encryption.Type encryption = 14;</code>
     * @return int
     */
    public function getEncryption()
    {
        return $this->encryption;
    }

    /**
     * Generated from protobuf field <code>.livekit.Encryption.Type encryption = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setEncryption($var)
    {
        GPBUtil::checkEnum($var, \Livekit\Encryption\Type::class);
        $this->encryption = $var;

        return $this;
    }

    /**
     * which stream the track belongs to, used to group tracks together.
     * if not specified, server will infer it from track source to bundle camera/microphone, screenshare/audio together
     *
     * Generated from protobuf field <code>string stream = 15;</code>
     * @return string
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * which stream the track belongs to, used to group tracks together.
     * if not specified, server will infer it from track source to bundle camera/microphone, screenshare/audio together
     *
     * Generated from protobuf field <code>string stream = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream = $var;

        return $this;
    }

}

