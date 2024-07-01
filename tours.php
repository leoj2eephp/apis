<?php
header('Content-Type: application/json');

$tourist_spots = [
    ['id' => 1, 'name' => 'Torre Eiffel', 'location' => 'París, Francia'],
    ['id' => 2, 'name' => 'Estatua de la Libertad', 'location' => 'Nueva York, EE.UU.'],
    ['id' => 3, 'name' => 'Gran Muralla China', 'location' => 'China'],
    ['id' => 4, 'name' => 'Machu Picchu', 'location' => 'Perú'],
    ['id' => 5, 'name' => 'Coliseo Romano', 'location' => 'Roma, Italia'],
    ['id' => 6, 'name' => 'Taj Mahal', 'location' => 'Agra, India'],
    ['id' => 7, 'name' => 'Cristo Redentor', 'location' => 'Río de Janeiro, Brasil'],
    ['id' => 8, 'name' => 'Pirámides de Giza', 'location' => 'El Cairo, Egipto'],
    ['id' => 9, 'name' => 'Sagrada Familia', 'location' => 'Barcelona, España'],
    ['id' => 10, 'name' => 'Palacio de Buckingham', 'location' => 'Londres, Reino Unido']
];

echo json_encode($tourist_spots);
