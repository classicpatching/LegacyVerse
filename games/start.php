<?php
// start.php
header("Content-Type: application/json");

$placeId = $_GET['placeId'] ?? 1;
$userId = $_GET['userId'] ?? 1;

// This is your joinScriptUrl — points to the same start.php
$joinUrl = "http://www.fotone.com/games/start.php?placeId={$placeId}&userId={$userId}";

$response = [
    "status" => "2",
    "jobId" => "Test_" . $placeId,
    "authenticationUrl" => "http://www.fotone.com/Login/Negotiate.ashx",
    "authenticationTicket" => "SomeTicketThatDosentCrash",
    "joinScriptUrl" => $joinUrl
];

echo json_encode($response);
