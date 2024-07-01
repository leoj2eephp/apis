<?php
header('Content-Type: application/json');

$books = [
    ['id' => 1, 'title' => 'Cien años de soledad', 'author' => 'Gabriel García Márquez'],
    ['id' => 2, 'title' => 'Don Quijote de la Mancha', 'author' => 'Miguel de Cervantes'],
    ['id' => 3, 'title' => 'La sombra del viento', 'author' => 'Carlos Ruiz Zafón'],
    ['id' => 4, 'title' => 'El amor en los tiempos del cólera', 'author' => 'Gabriel García Márquez'],
    ['id' => 5, 'title' => 'Rayuela', 'author' => 'Julio Cortázar'],
    ['id' => 6, 'title' => 'La casa de los espíritus', 'author' => 'Isabel Allende'],
    ['id' => 7, 'title' => 'Ficciones', 'author' => 'Jorge Luis Borges'],
    ['id' => 8, 'title' => 'Pedro Páramo', 'author' => 'Juan Rulfo'],
    ['id' => 9, 'title' => '1984', 'author' => 'George Orwell'],
    ['id' => 10, 'title' => 'Crónica de una muerte anunciada', 'author' => 'Gabriel García Márquez']
];

echo json_encode($books);
