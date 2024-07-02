<?php
header('Content-Type: application/json');

$songs = [
    ['id' => 1, 'title' => 'Bohemian Rhapsody', 'artist' => 'Queen'],
    ['id' => 2, 'title' => 'Under Pressure', 'artist' => 'Queen'],
    ['id' => 3, 'title' => 'Imagine', 'artist' => 'John Lennon'],
    ['id' => 4, 'title' => 'Hotel California', 'artist' => 'Eagles'],
    ['id' => 5, 'title' => 'Stairway to Heaven', 'artist' => 'Led Zeppelin'],
    ['id' => 6, 'title' => 'Black Dog', 'artist' => 'Led Zeppelin'],
    ['id' => 7, 'title' => 'Hey Jude', 'artist' => 'The Beatles'],
    ['id' => 8, 'title' => 'Come Together', 'artist' => 'The Beatles'],
    ['id' => 9, 'title' => 'Smells Like Teen Spirit', 'artist' => 'Nirvana'],
    ['id' => 10, 'title' => 'Heart-Shaped Box', 'artist' => 'Nirvana']
];

echo json_encode($songs);
