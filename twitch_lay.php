<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitch Layout</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            background-color: #252525;
            padding: 10px 20px;
            text-align: center;
            font-size: 1.5em;
        }

        .content {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        .video-section {
            flex: 3;
            background-color: #101010;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-section iframe {
            width: 95%;
            height: 90%;
        }

        .sidebar {
            flex: 1;
            background-color: #252525;
            display: flex;
            flex-direction: column;
        }

        .chat {
            flex: 2;
            padding: 10px;
            overflow-y: auto;
        }

        .info {
            flex: 1;
            padding: 10px;
            background-color: #333333;
        }

        .footer {
            background-color: #252525;
            text-align: center;
            padding: 10px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="header">
        <strong>Your Stream Title</strong>
    </div>
    <div class="content">
        <div class="video-section">
            <iframe 
                src="https://player.twitch.tv/?channel=your_channel_name&parent=example.com" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
        </div>
        <div class="sidebar">
            <div class="chat">
                <h3>Chat</h3>
                <!-- Embed Twitch chat -->
                <iframe 
                    src="https://www.twitch.tv/embed/your_channel_name/chat?darkpopout" 
                    frameborder="0" 
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
            <div class="info">
                <h3>Stream Info</h3>
                <p>Game: Placeholder</p>
                <p>Followers: Placeholder</p>
            </div>
        </div>
    </div>
    <div class="footer">
        © 2024 Your Channel Name
    </div>
</body>
</html>
