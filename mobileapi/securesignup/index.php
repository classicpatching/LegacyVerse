<?php
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *"); // allow APK or browser requests

$response = [
    "Status" => "OK",
    "UserInfo" => [
        "UserName" => "sign",
        "UserPassword" => "acc",
        "UserID" => 2,
        "RobuxBalance" => 0,
        "TicketsBalance" => 0,
        "IsAnyBuildersClubMember" => true,
        "ThumbnailUrl" => "https://14blox.strangled.net/getUserAvatarImage?userId=1"
    ]
];

echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
exit;
