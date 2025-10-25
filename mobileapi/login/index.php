<?php
header('Content-Type: application/json');

$users = [
    "Admin" => [
        "UserID" => 1,
        "UserPassword" => "adm129",
        "RobuxBalance" => 1500,
        "TicketsBalance" => 1200,
        "IsAnyBuildersClubMember" => true
    ],
    "qa" => [
        "UserID" => 2,
        "UserPassword" => "qaguy77",
        "RobuxBalance" => 500,
        "TicketsBalance" => 800,
        "IsAnyBuildersClubMember" => false
    ],
    "David.Baszucki" => [
        "UserID" => 3,
        "UserPassword" => "dbpass42",
        "RobuxBalance" => 18500,
        "TicketsBalance" => 17500,
        "IsAnyBuildersClubMember" => true
    ],
    "erik.cassel" => [
        "UserID" => 4,
        "UserPassword" => "ecpass88",
        "RobuxBalance" => 20000,
        "TicketsBalance" => 19500,
        "IsAnyBuildersClubMember" => true
    ],
    "Toolbox" => [
        "UserID" => 5,
        "UserPassword" => "toolbox7",
        "RobuxBalance" => 1200,
        "TicketsBalance" => 800,
        "IsAnyBuildersClubMember" => false
    ],
    "aden" => [
        "UserID" => 6,
        "UserPassword" => "adenpass123",
        "RobuxBalance" => 700,
        "TicketsBalance" => 400,
        "IsAnyBuildersClubMember" => false
    ],
    "roblox" => [
        "UserID" => 7,
        "UserPassword" => "robloxMaster",
        "RobuxBalance" => PHP_INT_MAX,
        "TicketsBalance" => PHP_INT_MAX,
        "IsAnyBuildersClubMember" => false
    ],
    "guest 1234" => [
        "UserID" => 0,
        "UserPassword" => "guest123",
        "RobuxBalance" => 0,
        "TicketsBalance" => 0,
        "IsAnyBuildersClubMember" => false
    ]
];

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if ($username === null || $password === null) {
    $raw = file_get_contents('php://input');
    $json = json_decode($raw, true);
    if (is_array($json)) {
        if ($username === null && isset($json['username'])) $username = $json['username'];
        if ($password === null && isset($json['password'])) $password = $json['password'];
    }
}

$username = $username === null ? '' : (string)$username;
$password = $password === null ? '' : (string)$password;

if (!isset($users[$username]) || $users[$username]['UserPassword'] !== $password) {
    echo json_encode(["Status" => "InvalidPassword"], JSON_PRETTY_PRINT);
    exit;
}

$user = $users[$username];
$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => $username,
        "UserPassword" => $user['UserPassword'],
        "UserID" => $user['UserID'],
        "RobuxBalance" => $user['RobuxBalance'],
        "TicketsBalance" => $user['TicketsBalance'],
        "IsAnyBuildersClubMember" => $user['IsAnyBuildersClubMember'],
        "ThumbnailUrl" => "https://14blox.strangled.net/getUserAvatarImage?userId=" . $user['UserID']
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
exit;
?>
