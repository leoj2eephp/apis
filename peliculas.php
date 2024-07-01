<?php
header('Content-Type: application/json');

$movies = [
    ['id' => 1, 'title' => 'El laberinto del fauno', 'director' => 'Guillermo del Toro'],
    ['id' => 2, 'title' => 'Interstellar', 'director' => 'Christopher Nolan'],
    ['id' => 3, 'title' => 'Mar adentro', 'director' => 'Alejandro Amenábar'],
    ['id' => 4, 'title' => 'Volver', 'director' => 'Pedro Almodóvar'],
    ['id' => 5, 'title' => 'Roma', 'director' => 'Alfonso Cuarón'],
    ['id' => 6, 'title' => 'El secreto de sus ojos', 'director' => 'Juan José Campanella'],
    ['id' => 7, 'title' => 'Relatos salvajes', 'director' => 'Damián Szifron'],
    ['id' => 8, 'title' => 'Biutiful', 'director' => 'Alejandro González Iñárritu'],
    ['id' => 9, 'title' => 'Tenet', 'director' => 'Cristopher Nolan'],
    ['id' => 10, 'title' => 'El Origen', 'director' => 'Cristopher Nolan']
];

echo json_encode($movies);