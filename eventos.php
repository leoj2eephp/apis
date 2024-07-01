<?php
header('Content-Type: application/json');

$events = [
    ['id' => 1, 'name' => 'Conferencia de Tecnología 2024', 'date' => '2024-08-10'],
    ['id' => 2, 'name' => 'Festival de Música', 'date' => '2024-07-15'],
    ['id' => 3, 'name' => 'Exposición de Arte', 'date' => '2024-09-05'],
    ['id' => 4, 'name' => 'Feria del Libro', 'date' => '2024-06-20'],
    ['id' => 5, 'name' => 'Maratón de la Ciudad', 'date' => '2024-10-01'],
    ['id' => 6, 'name' => 'Concierto de Rock', 'date' => '2024-11-12'],
    ['id' => 7, 'name' => 'Festival de Cine', 'date' => '2024-08-25'],
    ['id' => 8, 'name' => 'Congreso de Medicina', 'date' => '2024-09-15'],
    ['id' => 9, 'name' => 'Festival Gastronómico', 'date' => '2024-07-30'],
    ['id' => 10, 'name' => 'Carrera de Bicicletas', 'date' => '2024-08-18']
];

echo json_encode($events);
