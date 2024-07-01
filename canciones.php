<?php
header('Content-Type: application/json');

$songs = [
    ['id' => 1, 'title' => 'Bohemian Rhapsody', 'artist' => 'Queen'],
    ['id' => 2, 'title' => 'Imagine', 'artist' => 'John Lennon'],
    ['id' => 3, 'title' => 'Hotel California', 'artist' => 'Eagles'],
    ['id' => 4, 'title' => 'Stairway to Heaven', 'artist' => 'Led Zeppelin'],
    ['id' => 5, 'title' => 'Hey Jude', 'artist' => 'The Beatles'],
    ['id' => 6, 'title' => 'Smells Like Teen Spirit', 'artist' => 'Nirvana'],
    ['id' => 7, 'title' => 'Sweet Child O\' Mine', 'artist' => 'Guns N\' Roses'],
    ['id' => 8, 'title' => 'Billie Jean', 'artist' => 'Michael Jackson'],
    ['id' => 9, 'title' => 'Like a Rolling Stone', 'artist' => 'Bob Dylan'],
    ['id' => 10, 'title' => 'What\'s Going On', 'artist' => 'Marvin Gaye']
];

echo json_encode($songs);
