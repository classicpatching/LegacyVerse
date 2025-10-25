<?php
header("Content-Type: application/json");

$placeid = $_GET['placeid'] ?? 1;
$userId = $_GET['userId'] ?? 1;

$joinUrl = "http://www.fotone.com/games/start?placeid={$placeid}&userId={$userId}";

$response = [
    "status" => "2",
    "jobId" => "Test_" . $placeid,
    "authenticationUrl" => "http://www.fotone.com/Login/Negotiate.ashx",
    "authenticationTicket" => "SomeTicketThatDosentCrash",
    "joinScriptUrl" => $joinUrl
];

echo json_encode($response);
