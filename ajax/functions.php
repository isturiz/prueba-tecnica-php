<?php

function executeQuery($sql, $params = []) {
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

  // Prepara la consulta de inserción
  $stmt = $conn->prepare($sql);

  // Verifica si hay parámetros y los vincula si es necesario
  if (!empty($params)) {
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
  }

  // Ejecuta la consulta
  if ($stmt->execute()) {
    // Envía una respuesta JSON exitosa
    echo json_encode(['success' => true, 'message' => 'Registro insertado correctamente en la base de datos.']);
  } else {
    // Envía una respuesta JSON con error
    echo json_encode(['success' => false, 'error' => 'Error al insertar el registro: ' . $stmt->error]);
  }

  // Cierra la conexión y el statement
  $stmt->close();
  $conn->close();
  exit();
}

function deleteRecord($tableName, $idColumn, $recordId) {
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
  $sql = "DELETE FROM $tableName WHERE $idColumn = ?";

  // Prepara y vincula los parámetros
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $recordId);

  // Ejecuta la consulta
  if ($stmt->execute()) {
    // Envía una respuesta JSON exitosa
    echo json_encode(['success' => true, 'message' => 'Registro eliminado correctamente.']);
  } else {
    // Envía una respuesta JSON con error
    echo json_encode(['success' => false, 'error' => 'Error al eliminar el registro: ' . $stmt->error]);
  }

  // Cierra la conexión y el statement
  $stmt->close();
  $conn->close();
  exit();
}

?>
