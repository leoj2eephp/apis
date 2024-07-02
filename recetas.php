<?php
header('Content-Type: application/json');

$recipes = [
    ['id' => 1, 'name' => 'Paella', 'ingredients' => ['Arroz', 'mariscos', 'azafrán', 'caldo de pescado']],
    ['id' => 2, 'name' => 'Tortilla de patatas', 'ingredients' => ['Patatas', 'huevos', 'cebolla', 'aceite']],
    ['id' => 3, 'name' => 'Gazpacho', 'ingredients' => ['Tomates', 'pepino', 'pimiento', 'aceite de oliva']],
    ['id' => 4, 'name' => 'Ceviche', 'ingredients' => ['Pescado', 'limón', 'cebolla', 'cilantro']],
    ['id' => 5, 'name' => 'Arepas', 'ingredients' => ['Harina de maíz', 'agua', 'sal']],
    ['id' => 6, 'name' => 'Mole', 'ingredients' => ['Pollo', 'chocolate', 'chiles', 'especias']],
    ['id' => 7, 'name' => 'Empanadas', 'ingredients' => ['Harina', 'carne', 'cebolla', 'huevo']],
    ['id' => 8, 'name' => 'Tacos', 'ingredients' => ['Tortillas', 'carne', 'cebolla', 'cilantro']],
    ['id' => 9, 'name' => 'Chiles en nogada', 'ingredients' => ['Chiles', 'picadillo', 'nuez', 'crema']],
    ['id' => 10, 'name' => 'Sancocho', 'ingredients' => ['Carne', 'yuca', 'plátano', 'mazorca']]
];

echo json_encode($recipes);
