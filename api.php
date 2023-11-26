<?php
// api.php

require_once 'config/api_config.php';

// Lógica para manejar las solicitudes de la API
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

// Ejemplo: Manejar la solicitud para agregar un vendedor
if ($method === 'POST' && $path === '/prueba-tecnica-php/api/add-seller') {
  echo "Ruta detectada: /prueba-tecnica-php/api/add-seller\n";

  // Obtener los datos del cuerpo de la solicitud
  $data = json_decode(file_get_contents('php://input'), true);

  // Validar y procesar los datos (agregar lógica según tus necesidades)
  // ...

  // Devolver una respuesta JSON
  header('Content-Type: application/json');
  echo json_encode(['success' => true, 'message' => 'Solicitud de API procesada']);
  exit;
}

// Manejar otras rutas de la API según sea necesario
// ...

// Si no se encontró ninguna ruta de API, devolver un error
header('Content-Type: application/json', true, 404);
echo json_encode(['error' => 'Ruta de API no encontrada']);
