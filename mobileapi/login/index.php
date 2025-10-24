<?php
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
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
], JSON_PRETTY_PRINT);
?>
