<?php
header('Content-Type: application/json');

echo json_encode([
    "UserInfo" => [
        "UserName" => "testuser",
        "UserPassword" => "hello",
        "UserID" => 1,
        "RobuxBalance" => 150,
        "TicketsBalance" => 12000,
        "IsAnyBuildersClubMember" => true,
        "ThumbnailUrl" => "https://14blox.strangled.net/getUserAvatarImage?userId=1"
    ]
]);
?>
