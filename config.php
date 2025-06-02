<?php
header('Content-Type: application/json');

// Securely retrieve environment variables
$voiceAgentId = getenv('KIAAN_VOICE_AGENT_ID') ?: 'default-voice-agent';
$meetingAgentId = getenv('KIAAN_MEETING_AGENT_ID') ?: 'default-meeting-agent';
$webhookUrl = getenv('KIAAN_WEBHOOK_URL') ?: 'https://your-webhook-url.com';

// Authentication
$authToken = isset($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] : '';
if ($authToken !== 'Bearer your-secure-token') {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

echo json_encode([
    'voiceAgentId' => $voiceAgentId,
    'meetingAgentId' => $meetingAgentId,
    'webhookUrl' => $webhookUrl
]);
?>