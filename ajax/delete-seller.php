<?php
// ajax/delete-seller.php

if ($_SERVER["REQUEST_METHOD"] === "DELETE" && isset($_GET['id_vendedor'])) {
  $sellerId = $_GET['id_vendedor'];

  // Incluye la configuración de la base de datos
  include '../config/api_config.php';

  // Conecta con la base de datos
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Verifica la conexión
  if ($conn->connect_error) {
    // Envía una respuesta JSON con error de conexión
    echo json_encode(['success' => false, 'error' => 'Error de conexión: ' . $conn->connect_error]);
    exit();
  }

  // Prepara la consulta de eliminación
  $sql = "DELETE FROM vendedores WHERE id_vendedor = $sellerId";

  // Ejecuta la consulta
  if ($conn->query($sql) === TRUE) {
    // Envía una respuesta JSON exitosa
    echo json_encode(['success' => true, 'message' => 'Vendedor eliminado correctamente.']);
  } else {
    // Envía una respuesta JSON con error
    echo json_encode(['success' => false, 'error' => 'Error al eliminar el vendedor: ' . $conn->error]);
  }

  // Cierra la conexión
  $conn->close();
} else {
  // Si la solicitud no es DELETE o no incluye el parámetro 'id', envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'Solicitud no válida.']);
}
