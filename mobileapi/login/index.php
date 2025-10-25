<?php
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["password"] == "0987654321123" && $_POST["username"] == "roblox") {
  echo(json_encode([
      "Status" => "OK",
      "UserInfo" => [
        "UserID" => 1,
        "UserName" => $_POST["username"],
        "RobuxBalance" => 100000000,
        "TicketsBalance" => 100000000,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/1.webp"
      ]
  ],JSON_UNESCAPED_SLASHES));
  } else {
    echo(json_encode([
      "Status" => "InvalidPassword",
      "UserInfo" => [
        "UserID" => 1,
        "UserName" => $_POST["username"],
        "RobuxBalance" => 100000000,
        "TicketsBalance" => 100000000,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/1.webp"
      ]
  ],JSON_UNESCAPED_SLASHES));
  }
}
?>
