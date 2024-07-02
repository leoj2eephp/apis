<?php
header('Content-Type: application/json');

$cocktails = [
    ['id' => 1, 'name' => 'Mojito', 'ingredients' => ['Ron', 'menta', 'lima', 'soda', 'azúcar']],
    ['id' => 2, 'name' => 'Margarita', 'ingredients' => ['Tequila', 'jugo de lima', 'Cointreau']],
    ['id' => 3, 'name' => 'Caipirinha', 'ingredients' => ['Cachaça', 'lima', 'azúcar']],
    ['id' => 4, 'name' => 'Piña Colada', 'ingredients' => ['Ron', 'piña', 'crema de coco']],
    ['id' => 5, 'name' => 'Daiquiri', 'ingredients' => ['Ron', 'jugo de lima', 'azúcar']],
    ['id' => 6, 'name' => 'Bloody Mary', 'ingredients' => ['Vodka', 'jugo de tomate', 'salsa Worcestershire', 'tabasco']],
    ['id' => 7, 'name' => 'Old Fashioned', 'ingredients' => ['Bourbon', 'azúcar', 'amargo de Angostura', 'agua']],
    ['id' => 8, 'name' => 'Negroni', 'ingredients' => ['Gin', 'Campari', 'vermut rojo']],
    ['id' => 9, 'name' => 'Cosmopolitan', 'ingredients' => ['Vodka', 'Cointreau', 'jugo de arándano', 'jugo de lima']],
    ['id' => 10, 'name' => 'Mai Tai', 'ingredients' => ['Ron', 'licor de naranja', 'jugo de lima', 'almendra']]
];

echo json_encode($cocktails);