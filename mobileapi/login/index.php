<?php
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => "admin",
        "UserPassword" => "blank",
        "UserID" => 1,
        "RobuxBalance" => 99999,
        "TicketsBalance" => 99999,
        "IsAnyBuildersClubMember" => true,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/avatar.webp"
    ]
];

echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
exit;
