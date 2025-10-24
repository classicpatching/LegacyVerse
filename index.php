<?php
session_start();
require 'vendor/autoload.php';

$uri = getenv('MONGO_URI');
$client = new MongoDB\Client($uri);
$db = $client->chatDB;

// Collections
$messages = $db->messages;
$users = $db->activeUsers;

// Track active user
$sessionId = session_id();
$users->updateOne(
    ['_id' => $sessionId],
    ['$set' => ['last_seen' => new MongoDB\BSON\UTCDateTime()]],
    ['upsert' => true]
);

// Remove users inactive for 2 minutes
$twoMinutesAgo = new MongoDB\BSON\UTCDateTime((time() - 120) * 1000);
$users->deleteMany(['last_seen' => ['$lt' => $twoMinutesAgo]]);

// Count active users
$activeUsersCount = $users->countDocuments();

?>
<!DOCTYPE html>
<html>
<head><title>Simple Chat</title></head>
<body>
<h3>Active Users: <?= $activeUsersCount ?></h3>
<!-- Your chat HTML here -->
</body>
</html>
