<?php
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

// Discord webhook URL
$webhook_url = "https://discord.com/api/webhooks/1076619820205887579/a_f81f2hCUuqj-OF_sRIPOYBoFGB7dPB_9Dc3kLdbBoIR3aEY3h8Dso1TYK0bLSdbnyO";

// Get the form data
$song_name = $_POST["song_name"];
$artist_name = $_POST["artist_name"];
$requester_name = $_POST["requester_name"];

// Create webhook payload
$payload = [
    "embeds" => [
        [
            "title" => "Requested Song",
            "type" => "rich",
            "description" => "**Song Name:** $song_name\n**Artist Name:** $artist_name\n**Requester Name:** $requester_name",
            "color" => hexdec( "c31432" ),
            "footer" => [
                "text" => "Unleash Your Inner Alpha with AlphaCoon!",
                "icon_url" => "https://i.imgur.com/68x98Np.png"
            ],
            "thumbnail" => [
                "url" => "https://i.imgur.com/wvDaRDH.png"
            ],
        ]
    ]
];

// Send webhook using Guzzle
$client = new Client();
try {
    $response = $client->post($webhook_url, [
        'json' => $payload,
        'timeout' => 5, // set timeout to 5 seconds
    ]);
} catch (RequestException $e) {
    // Handle error here
}

// Redirect to index page
header('Location: index.php');
exit();
?>