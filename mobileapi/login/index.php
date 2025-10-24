<?php
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => "LegacyVerse Test Account",
        "UserID" => 1,
        "RobuxBalance" => 2014,
        "TicketsBalance" => 999999999,
        "IsAnyBuildersClubMember" => true,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/avatar.webp"
    ]
];

echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
exit;
