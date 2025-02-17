<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_rtc.proto

namespace GPBMetadata;

class LivekitRtc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\LivekitModels::initOnce();
        $pool->internalAddGeneratedFile(
            '
�.
livekit_rtc.protolivekit"�
SignalRequest,
offer (2.livekit.SessionDescriptionH -
answer (2.livekit.SessionDescriptionH *
trickle (2.livekit.TrickleRequestH -
	add_track (2.livekit.AddTrackRequestH )
mute (2.livekit.MuteTrackRequestH 3
subscription (2.livekit.UpdateSubscriptionH 5
track_setting (2.livekit.UpdateTrackSettingsH &
leave (2.livekit.LeaveRequestH 3
update_layers
 (2.livekit.UpdateVideoLayersH B
subscription_permission (2.livekit.SubscriptionPermissionH (

sync_state (2.livekit.SyncStateH -
simulate (2.livekit.SimulateScenarioH 
ping (H =
update_metadata (2".livekit.UpdateParticipantMetadataH !
ping_req (2.livekit.PingH B	
message"�
SignalResponse%
join (2.livekit.JoinResponseH -
answer (2.livekit.SessionDescriptionH ,
offer (2.livekit.SessionDescriptionH *
trickle (2.livekit.TrickleRequestH ,
update (2.livekit.ParticipantUpdateH :
track_published (2.livekit.TrackPublishedResponseH &
leave (2.livekit.LeaveRequestH )
mute	 (2.livekit.MuteTrackRequestH 4
speakers_changed
 (2.livekit.SpeakersChangedH *
room_update (2.livekit.RoomUpdateH >
connection_quality (2 .livekit.ConnectionQualityUpdateH 9
stream_state_update (2.livekit.StreamStateUpdateH E
subscribed_quality_update (2 .livekit.SubscribedQualityUpdateH O
subscription_permission_update (2%.livekit.SubscriptionPermissionUpdateH 
refresh_token (	H >
track_unpublished (2!.livekit.TrackUnpublishedResponseH 
pong (H /
	reconnect (2.livekit.ReconnectResponseH "
	pong_resp (2.livekit.PongH >
subscription_response (2.livekit.SubscriptionResponseH B	
message",
SimulcastCodec
codec (	
cid (	"�
AddTrackRequest
cid (	
name (	 
type (2.livekit.TrackType
width (
height (
muted (
disable_dtx ($
source (2.livekit.TrackSource#
layers	 (2.livekit.VideoLayer1
simulcast_codecs
 (2.livekit.SimulcastCodec
sid (	
stereo (
disable_red (,

encryption (2.livekit.Encryption.Type
stream (	"N
TrickleRequest
candidateInit (	%
target (2.livekit.SignalTarget".
MuteTrackRequest
sid (	
muted ("�
JoinResponse
room (2.livekit.Room-
participant (2.livekit.ParticipantInfo4
other_participants (2.livekit.ParticipantInfo
server_version (	\'
ice_servers (2.livekit.ICEServer
subscriber_primary (
alternative_url (	:
client_configuration (2.livekit.ClientConfiguration
server_region	 (	
ping_timeout
 (
ping_interval ((
server_info (2.livekit.ServerInfo
sif_trailer ("x
ReconnectResponse\'
ice_servers (2.livekit.ICEServer:
client_configuration (2.livekit.ClientConfiguration"H
TrackPublishedResponse
cid (	!
track (2.livekit.TrackInfo"-
TrackUnpublishedResponse
	track_sid (	"/
SessionDescription
type (	
sdp (	"C
ParticipantUpdate.
participants (2.livekit.ParticipantInfo"s
UpdateSubscription

track_sids (	
	subscribe (6
participant_tracks (2.livekit.ParticipantTracks"�
UpdateTrackSettings

track_sids (	
disabled (&
quality (2.livekit.VideoQuality
width (
height (
fps (
priority ("P
LeaveRequest
can_reconnect ()
reason (2.livekit.DisconnectReason"K
UpdateVideoLayers
	track_sid (	#
layers (2.livekit.VideoLayer";
UpdateParticipantMetadata
metadata (	
name (	"?
	ICEServer
urls (	
username (	

credential (	"9
SpeakersChanged&
speakers (2.livekit.SpeakerInfo")

RoomUpdate
room (2.livekit.Room"l
ConnectionQualityInfo
participant_sid (	+
quality (2.livekit.ConnectionQuality
score ("J
ConnectionQualityUpdate/
updates (2.livekit.ConnectionQualityInfo"b
StreamStateInfo
participant_sid (	
	track_sid (	#
state (2.livekit.StreamState"D
StreamStateUpdate/
stream_states (2.livekit.StreamStateInfo"L
SubscribedQuality&
quality (2.livekit.VideoQuality
enabled ("O
SubscribedCodec
codec (	-
	qualities (2.livekit.SubscribedQuality"�
SubscribedQualityUpdate
	track_sid (	8
subscribed_qualities (2.livekit.SubscribedQuality3
subscribed_codecs (2.livekit.SubscribedCodec"p
TrackPermission
participant_sid (	

all_tracks (

track_sids (	
participant_identity (	"g
SubscriptionPermission
all_participants (3
track_permissions (2.livekit.TrackPermission"[
SubscriptionPermissionUpdate
participant_sid (	
	track_sid (	
allowed ("�
	SyncState+
answer (2.livekit.SessionDescription1
subscription (2.livekit.UpdateSubscription7
publish_tracks (2.livekit.TrackPublishedResponse/
data_channels (2.livekit.DataChannelInfo*
offer (2.livekit.SessionDescription"S
DataChannelInfo
label (	

id (%
target (2.livekit.SignalTarget"�
SimulateScenario
speaker_update (H 
node_failure (H 
	migration (H 
server_leave (H ?
switch_candidate_protocol (2.livekit.CandidateProtocolH 
subscriber_bandwidth (H B

scenario"&
Ping
	timestamp (
rtt ("6
Pong
last_ping_timestamp (
	timestamp ("6
RegionSettings$
regions (2.livekit.RegionInfo";

RegionInfo
region (	
url (	
distance ("R
SubscriptionResponse
	track_sid (	\'
err (2.livekit.SubscriptionError*-
SignalTarget
	PUBLISHER 

SUBSCRIBER*%
StreamState

ACTIVE 

PAUSED*.
CandidateProtocol
UDP 
TCP
TLSBFZ#github.com/livekit/protocol/livekit�LiveKit.Proto�LiveKit::Protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

