<?php
header('Content-Type: application/json');

// Example users
$users = [
    "admin" => [
        "UserID" => 1,
        "UserPassword" => "hello",
        "RobuxBalance" => 150,
        "TicketsBalance" => 12000,
        "IsAnyBuildersClubMember" => true
    ],
    "qa" => [
        "UserID" => 2,
        "UserPassword" => "1234",
        "RobuxBalance" => 500,
        "TicketsBalance" => 3000,
        "IsAnyBuildersClubMember" => false
    ]
];

// Get username and password from POST
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Check login
if (!isset($users[$username]) || $users[$username]['UserPassword'] !== $password) {
    echo json_encode(["Status" => "InvalidPassword"]);
    exit;
}

// Successful login
$user = $users[$username];
$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => $username,
        "UserPassword" => $user['UserPassword'], // optional to hide
        "UserID" => $user['UserID'],
        "RobuxBalance" => $user['RobuxBalance'],
        "TicketsBalance" => $user['TicketsBalance'],
        "IsAnyBuildersClubMember" => $user['IsAnyBuildersClubMember'],
        "ThumbnailUrl" => "https://14blox.strangled.net/getUserAvatarImage?userId=" . $user['UserID']
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
?>
