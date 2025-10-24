<?php
$placeid = isset($_GET['placeid']) ? $_GET['placeid'] : '';
$userid = isset($_GET['userid']) ? $_GET['userid'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Start Game</title>
</head>
<body>
    <h1>Game Started!</h1>
    <p>Place ID: <?php echo htmlspecialchars($placeid); ?></p>
    <p>User ID: <?php echo htmlspecialchars($userid); ?></p>
</body>
</html>
