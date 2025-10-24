<?php
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => "qa",
        "UserID" => 1,
        "RobuxBalance" => 10,
        "TicketsBalance" => 100,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/avatar.webp"
    ]
];

echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
exit;
