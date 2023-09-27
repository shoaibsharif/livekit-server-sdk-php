<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_analytics.proto

namespace GPBMetadata;

class LivekitAnalytics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\LivekitModels::initOnce();
        \GPBMetadata\LivekitEgress::initOnce();
        \GPBMetadata\LivekitIngress::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
livekit_analytics.protolivekitgoogle/protobuf/timestamp.protolivekit_models.protolivekit_egress.protolivekit_ingress.proto"T
AnalyticsVideoLayer
layer (
packets (
bytes (
frames ("�
AnalyticsStream
ssrc (
primary_packets (
primary_bytes (
retransmit_packets (
retransmit_bytes (
padding_packets (
padding_bytes (
packets_lost (
frames	 (
rtt
 (
jitter (
nacks (
plis (
firs (2
video_layers (2.livekit.AnalyticsVideoLayer"�
AnalyticsStat
analytics_key (	!
kind (2.livekit.StreamType.

time_stamp (2.google.protobuf.Timestamp
node (	
room_id (	
	room_name (	
participant_id (	
track_id (	
score	 ()
streams
 (2.livekit.AnalyticsStream
mime (	
	min_score (
median_score ("7
AnalyticsStats%
stats (2.livekit.AnalyticsStat"�
AnalyticsClientMeta
region (	
node (	
client_addr (	
client_connect_time (
connection_type (	2
reconnect_reason (2.livekit.ReconnectReason"�
AnalyticsEvent)
type (2.livekit.AnalyticsEventType-
	timestamp (2.google.protobuf.Timestamp
room_id (	
room (2.livekit.Room
participant_id (	-
participant (2.livekit.ParticipantInfo
track_id (	!
track (2.livekit.TrackInfo
analytics_key
 (	(
client_info (2.livekit.ClientInfo1
client_meta (2.livekit.AnalyticsClientMeta
	egress_id (	

ingress_id (	;
max_subscribed_video_quality (2.livekit.VideoQuality+
	publisher (2.livekit.ParticipantInfo
mime (	#
egress (2.livekit.EgressInfo%
ingress (2.livekit.IngressInfo
error (	$
	rtp_stats (2.livekit.RTPStats
video_layer (":
AnalyticsEvents\'
events (2.livekit.AnalyticsEvent**

StreamType
UPSTREAM 

DOWNSTREAM*�
AnalyticsEventType
ROOM_CREATED 

ROOM_ENDED
PARTICIPANT_JOINED
PARTICIPANT_LEFT
TRACK_PUBLISHED
TRACK_PUBLISH_REQUESTED
TRACK_UNPUBLISHED
TRACK_SUBSCRIBED
TRACK_SUBSCRIBE_REQUESTED
TRACK_SUBSCRIBE_FAILED
TRACK_UNSUBSCRIBED
TRACK_PUBLISHED_UPDATE

TRACK_MUTED
TRACK_UNMUTED
TRACK_PUBLISH_STATS
TRACK_SUBSCRIBE_STATS
PARTICIPANT_ACTIVE
PARTICIPANT_RESUMED
EGRESS_STARTED
EGRESS_ENDED
EGRESS_UPDATED&
"TRACK_MAX_SUBSCRIBED_VIDEO_QUALITY
RECONNECTED
INGRESS_CREATED
INGRESS_DELETED
INGRESS_STARTED
INGRESS_ENDED
INGRESS_UPDATED2�
AnalyticsRecorderServiceB
IngestStats.livekit.AnalyticsStats.google.protobuf.Empty" (D
IngestEvents.livekit.AnalyticsEvents.google.protobuf.Empty" (BFZ#github.com/livekit/protocol/livekit�LiveKit.Proto�LiveKit::Protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

