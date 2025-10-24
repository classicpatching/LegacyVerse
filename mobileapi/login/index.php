<?php
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => "testuser",
        "UserPassword" => "hello",
        "UserID" => 1,
        "RobuxBalance" => 150,
        "TicketsBalance" => 12000,
        "IsAnyBuildersClubMember" => true,
        "ThumbnailUrl" => "https://14blox.strangled.net/getUserAvatarImage?userId=1"
    ]
];

echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
exit;
