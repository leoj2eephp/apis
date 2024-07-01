<?php
header('Content-Type: application/json');

$news = [
    ['id' => 1, 'title' => 'Gigantes tecnológicos lanzan nuevos gadgets', 'date' => '2024-06-15'],
    ['id' => 2, 'title' => 'Actualizaciones de la economía global', 'date' => '2024-06-16'],
    ['id' => 3, 'title' => 'Iniciativas contra el cambio climático', 'date' => '2024-06-17'],
    ['id' => 4, 'title' => 'Descubrimientos científicos recientes', 'date' => '2024-06-18'],
    ['id' => 5, 'title' => 'Nuevas políticas de salud pública', 'date' => '2024-06-19'],
    ['id' => 6, 'title' => 'Avances en inteligencia artificial', 'date' => '2024-06-20'],
    ['id' => 7, 'title' => 'Innovaciones en energías renovables', 'date' => '2024-06-21'],
    ['id' => 8, 'title' => 'Noticias del mercado laboral', 'date' => '2024-06-22'],
    ['id' => 9, 'title' => 'Tendencias en redes sociales', 'date' => '2024-06-23'],
    ['id' => 10, 'title' => 'Desarrollos en tecnología médica', 'date' => '2024-06-24']
];

echo json_encode($news);
