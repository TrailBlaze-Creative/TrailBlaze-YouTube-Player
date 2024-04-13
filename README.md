# Trailblaze YouTube Player

Trailblaze YouTube Player is a WordPress plugin that provides a customizable YouTube player with playlist and channel support.

## Features

- Supports individual YouTube videos, playlists, and channels.
- Customizable player controls, themes, and appearance.
- Responsive design that works well on all devices.
- Shortcode support for easy embedding in posts and pages.

## Installation

1. Download the plugin files.
2. Upload the plugin files to your WordPress plugins directory, usually `wp-content/plugins/`.
3. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage

Use the `[trailblaze_youtube]` shortcode in your posts or pages to embed the YouTube player. The shortcode accepts the following attributes:

- `user`: The YouTube username.
- `channelId`: The YouTube channel ID.
- `playlist`: The YouTube playlist ID.
- `fullscreen`: Enable fullscreen mode (true/false).
- `accent`: Accent color for the player.
- `controls`: Show player controls (true/false).
- `annotations`: Show video annotations (true/false).
- `autoplay`: Autoplay videos (true/false).
- `chainVideos`: Automatically play the next video in the playlist (true/false).
- `browsePlaylists`: Enable playlist browsing (true/false).
- `playerTheme`: Theme for the player ('dark'/'light').
- `listTheme`: Theme for the playlist ('dark'/'light').
- `responsive`: Enable responsive design (true/false).
- `playId`: The ID of the video to play first.
- `sortList`: Sort the playlist (true/false).
- `reverseList`: Reverse the playlist order (true/false).
- `shuffleList`: Shuffle the playlist (true/false).
- `wmode`: Set the wmode of the player ('opaque', 'window', 'transparent').

Example usage:

```markdown
[trailblaze_youtube user="YouTubeUsername" playlist="PL1234567890" controls=true autoplay=false]