<?php
header('Content-Type: application/json');

$tv_shows = [
    ['id' => 1, 'title' => 'La Casa de Papel', 'creator' => 'Álex Pina'],
    ['id' => 2, 'title' => 'El Ministerio del Tiempo', 'creator' => 'Pablo y Javier Olivares'],
    ['id' => 3, 'title' => 'Vis a Vis', 'creator' => 'Iván Escobar, Esther Martínez Lobato, Álex Pina'],
    ['id' => 4, 'title' => 'Narcos', 'creator' => 'Chris Brancato, Carlo Bernard, Doug Miro'],
    ['id' => 5, 'title' => 'Élite', 'creator' => 'Carlos Montero, Darío Madrona'],
    ['id' => 6, 'title' => 'Merlí', 'creator' => 'Héctor Lozano'],
    ['id' => 7, 'title' => 'Club de Cuervos', 'creator' => 'Gary Alazraki, Michael Lam'],
    ['id' => 8, 'title' => 'El Chapo', 'creator' => 'Silvana Aguirre, Carlos Contreras'],
    ['id' => 9, 'title' => 'Luis Miguel: La Serie', 'creator' => 'Daniel Krauze'],
    ['id' => 10, 'title' => 'La Reina del Sur', 'creator' => 'Roberto Stopello']
];

echo json_encode($tv_shows);
