<?php
header("Content-Type: text/plain; charset=utf-8");
http_response_code(404); // Proper HTTP 404

// Get the requested path
$requested_path = $_SERVER['REQUEST_URI'];

echo "Error: The path '$requested_path' does not exist.";
exit;
