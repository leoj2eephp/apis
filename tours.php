<?php
header('Content-Type: application/json');

$tourist_spots = [
    ['id' => 1, 'name' => 'Torre Eiffel', 'destino' => 'Francia'],
    ['id' => 2, 'name' => 'Estatua de la Libertad', 'destino' => 'EE.UU.'],
    ['id' => 3, 'name' => 'Gran Muralla China', 'destino' => 'China'],
    ['id' => 4, 'name' => 'Machu Picchu', 'destino' => 'Perú'],
    ['id' => 5, 'name' => 'Coliseo Romano', 'destino' => 'Italia'],
    ['id' => 6, 'name' => 'Taj Mahal', 'destino' => 'India'],
    ['id' => 7, 'name' => 'Pirámides de Giza', 'destino' => 'Egipto'],
    ['id' => 8, 'name' => 'Sagrada Familia', 'destino' => 'España'],
    ['id' => 9, 'name' => 'Torres del Paine', 'destino' => 'Chile'],
    ['id' => 10, 'name' => 'Torre Eiffel', 'destino' => 'Francia']
];

echo json_encode($tourist_spots);
