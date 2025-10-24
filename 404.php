<?php
header("Content-Type: text/plain; charset=utf-8");
http_response_code(404); // Send proper 404 HTTP status
echo "Error: The path you requested does not exist.";
exit;
