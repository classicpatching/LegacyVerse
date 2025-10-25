<?php
header("Content-Type: text/plain; charset=utf-8");
http_response_code(404);

$path = $_SERVER['REQUEST_URI'];
echo "Error: The path '$path' does not exist.";
exit;
