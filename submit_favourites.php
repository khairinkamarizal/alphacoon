<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require 'vendor/autoload.php';

use SpotifyWebAPI\SpotifyWebAPI;

// Set up the Spotify Web API client
$api = new SpotifyWebAPI();
$api->setAccessToken(getAccessToken());

// Get the Spotify URL from the form submission
$url = $_POST['track_url'];

// Extract the track information from the Spotify Web API
$track = $api->getTrack(getTrackId($url));
$title = $track->name;
$artist = $track->artists[0]->name;
$artwork = $track->album->images[0]->url;

// Save the track information to the MySQL database
$mysqli = new mysqli("localhost", "root", "", "alpha");
$stmt = $mysqli->prepare("INSERT INTO tracks (title, artist, artwork) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $artist, $artwork);
$stmt->execute();
$stmt->close();

// Functions to obtain the access token and track ID
function getAccessToken() {
    // Use client credentials flow to obtain an access token
    $client_id = "b28177d8f2e04bc4b973d0e2a66ec4fe";
    $client_secret = "ab1dd846204545e98c74bb3d8c0de321";
    $url = "https://accounts.spotify.com/api/token";
    $data = "grant_type=client_credentials";
    $options = array(
        "http" => array(
            "header" => "Authorization: Basic " . base64_encode("$client_id:$client_secret"),
            "method" => "POST",
            "content" => $data
        )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $json = json_decode($response);
    return $json->access_token;
}

function getTrackId($url) {
    // Extract the track ID from the Spotify URL
    $parts = explode('/', $url);
    return end($parts);
}

header('Location: alphaonly.php');