<?php
header('Content-Type: application/json');

$tv_shows = [
    ['id' => 1, 'title' => 'La Casa de Papel', 'genres' => ['Drama', 'Thriller']],
    ['id' => 2, 'title' => 'El Ministerio del Tiempo', 'genres' => ['Aventura', 'Fantasía', 'Ciencia ficción']],
    ['id' => 3, 'title' => 'Vis a Vis', 'genres' => ['Drama', 'Thriller']],
    ['id' => 4, 'title' => 'Narcos', 'genres' => ['Drama', 'Crimen', 'Biografía']],
    ['id' => 5, 'title' => 'Élite', 'genres' => ['Drama', 'Crimen', 'Misterio']],
    ['id' => 6, 'title' => 'Merlí', 'genres' => ['Drama', 'Comedia']],
    ['id' => 7, 'title' => 'Club de Cuervos', 'genres' => ['Comedia', 'Drama', 'Deportes']],
    ['id' => 8, 'title' => 'El Chapo', 'genres' => ['Drama', 'Crimen']],
    ['id' => 9, 'title' => 'Luis Miguel: La Serie', 'genres' => ['Biografía', 'Drama', 'Música']],
    ['id' => 10, 'title' => 'La Reina del Sur', 'genres' => ['Drama', 'Crimen']]
];

echo json_encode($tv_shows);
