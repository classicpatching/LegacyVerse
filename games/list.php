<?php
// list.php
$games = [
    ["placeId" => 1, "name" => "Test Game", "userId" => 1],
    ["placeId" => 2, "name" => "Another Game", "userId" => 2]
];
?>
<h1>Available Games</h1>
<ul>
<?php foreach($games as $game): ?>
    <li>
        <a href="start.php?placeId=<?= $game['placeId'] ?>&userId=<?= $game['userId'] ?>">
            <?= $game['name'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>
