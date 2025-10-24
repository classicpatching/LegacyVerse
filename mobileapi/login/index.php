<?php
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["password"] == "pass1234" && $_POST["username"] == "test") {
  echo(json_encode([
      "Status" => "OK",
      "UserInfo" => [
        "UserID" => 1,
        "UserName" => $_POST["username"],
        "RobuxBalance" => 0,
        "TicketsBalance" => 0,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "http://yourthumbnail.here/or_this_can_be_a_blank"
      ]
  ],JSON_UNESCAPED_SLASHES));
  } else {
    echo(json_encode([
      "Status" => "InvalidPassword",
      "UserInfo" => [
        "UserID" => 1,
        "UserName" => $_POST["username"],
        "RobuxBalance" => 0,
        "TicketsBalance" => 0,
        "IsAnyBuildersClubMember" => false,
        "ThumbnailUrl" => "http://yourthumbnail.here/or_this_can_be_a_blank"
      ]
  ],JSON_UNESCAPED_SLASHES));
  }
}
?>
