<?php
// Include the Google API client library
// youtube api to show videos
require_once '../vendor/autoload.php';

// Your API Key goes here
$apiKey = 'AIzaSyDmegl_IOuzuIx9UHQgTQkPLqzY_Qj3Hek'; // Make sure to replace 'YOUR_API_KEY' with your actual API key
$client = new Google_Client();
$client->setDeveloperKey($apiKey);

// Define the YouTube service
$youtube = new Google_Service_YouTube($client);

function searchYouTube($searchQuery) {
    global $youtube; // Use the $youtube object defined outside this function

    // Make the search request to the YouTube API
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => $searchQuery,
        'maxResults' => 10,
    ));

    $results = [];
    foreach ($searchResponse['items'] as $searchResult) {
        if ($searchResult['id']['kind'] === 'youtube#video') {
            $results[] = [
                'title' => $searchResult['snippet']['title'],
                'videoId' => $searchResult['id']['videoId']
            ];
        }
    }
    return $results;
}


?>