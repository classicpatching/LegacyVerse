<?php
$games = [
    ["placeid" => 1, "name" => "Test Game", "userId" => 1],
    ["placeid" => 2, "name" => "Another Game", "userId" => 2]
];
?>
<h1>Available Games</h1>
<ul>
<?php foreach($games as $game): ?>
    <li>
        <a href="start?placeid=<?= $game['placeid'] ?>&userId=<?= $game['userId'] ?>">
            <?= $game['name'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>
