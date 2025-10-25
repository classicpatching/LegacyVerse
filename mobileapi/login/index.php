<?php
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["password"] == "12345678" && $_POST["username"] == "Player") {
  echo(json_encode([
      "Status" => "OK",
      "UserInfo" => [
        "UserID" => 1,
        "UserName" => $_POST["username"],
        "RobuxBalance" => 10,
        "TicketsBalance" => 100,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/avatar.webp"
      ]
  ],JSON_UNESCAPED_SLASHES));
  } else {
    echo(json_encode([
      "Status" => "InvalidPassword",
      "UserInfo" => [
        "UserID" => 1,
        "UserName" => $_POST["username"],
        "RobuxBalance" => 10,
        "TicketsBalance" => 100,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "https://legacyverse.onrender.com/avatar.webp"
      ]
  ],JSON_UNESCAPED_SLASHES));
  }
}
?>
