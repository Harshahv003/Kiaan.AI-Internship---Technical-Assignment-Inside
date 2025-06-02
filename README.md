Kiaan Voice Orb Widget
A standalone JavaScript widget providing a voice and text-based AI assistant with a draggable orb interface and glassmorphism panel.
Installation

Include the widget CSS and JS files:

<link rel="stylesheet" href="path/to/kiaan-voice-orb.min.css">
<script src="path/to/kiaan-voice-orb.min.js"></script>


Initialize the widget:

<script>
  KiaanVoiceOrb.init({
    configUrl: 'https://your-domain.com/config.php'
  });
</script>


Set up environment variables in a .env file:

KIAAN_VOICE_AGENT_ID=your-voice-agent-id
KIAAN_MEETING_AGENT_ID=your-meeting-agent-id
KIAAN_WEBHOOK_URL=https://your-webhook-url.com


Configure the config.php file with authentication.

API Documentation
KiaanVoiceOrb.init(options)

options.configUrl (string): URL to the configuration endpoint.

KiaanVoiceOrb.startVoiceSession()
Starts a voice session with ElevenLabs.
KiaanVoiceOrb.stopVoiceSession()
Ends the voice session.
KiaanVoiceOrb.sendTextMessage(message, attachments)
Sends a text message with optional attachments.

message (string): Message text.
attachments (Array): Array of files.

Browser Support

Chrome/Edge 90+
Firefox 88+
Safari 14+
iOS Safari, Chrome Mobile

Dependencies

ElevenLabs SDK (@11labs/react)
ES6+ JavaScript
CSS3 with backdrop-filter

Development

Install dependencies: npm install
Build minified files: npm run build
Test with example/index.html

Security

API keys stored in environment variables.
Config endpoint requires Bearer token authentication.
No sensitive data exposed client-side.

Demo
[Insert live demo URL here]
