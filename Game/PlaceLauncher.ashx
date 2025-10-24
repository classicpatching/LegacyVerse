<?php
header("Content-Type: application/json");

$request = $_GET['request'] ?? '';
$placeId = $_GET['placeId'] ?? 1;
$isPartyLeader = $_GET['isPartyLeader'] ?? 'false';
$gender = $_GET['gender'] ?? '';
$isTeleport = $_GET['isTeleport'] ?? 'false';

if ($request === "RequestGame") {
    $response = [
        "status" => "2",
        "jobId" => "Test_" . $placeId,
        "authenticationUrl" => "http://www.fotone.com/Login/Negotiate.ashx",
        "authenticationTicket" => "SomeTicketThatDosentCrash",
        "joinScriptUrl" => "http://www.fotone.com/games/start.php?placeId={$placeId}&userId=1"
    ];
    echo json_encode($response);
    exit;
}

echo json_encode(["status" => "1", "error" => "Invalid request"]);
?>
