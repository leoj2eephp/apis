<?php
header('Content-Type: application/json');

$games = [
    ['id' => 1, 'title' => 'The Legend of Zelda: Breath of the Wild', 'platform' => 'Nintendo Switch'],
    ['id' => 2, 'title' => 'The Witcher 3: Wild Hunt', 'platform' => 'PC, PS4, Xbox One'],
    ['id' => 3, 'title' => 'Red Dead Redemption 2', 'platform' => 'PS4, Xbox One'],
    ['id' => 4, 'title' => 'God of War', 'platform' => 'PS4'],
    ['id' => 5, 'title' => 'Horizon Zero Dawn', 'platform' => 'PS4, PC'],
    ['id' => 6, 'title' => 'Minecraft', 'platform' => 'PC, PS4, Xbox One, Switch'],
    ['id' => 7, 'title' => 'Fortnite', 'platform' => 'PC, PS4, Xbox One, Switch'],
    ['id' => 8, 'title' => 'Cyberpunk 2077', 'platform' => 'PC, PS4, Xbox One'],
    ['id' => 9, 'title' => 'Super Mario Odyssey', 'platform' => 'Nintendo Switch'],
    ['id' => 10, 'title' => 'Animal Crossing: New Horizons', 'platform' => 'Nintendo Switch']
];

echo json_encode($games);
