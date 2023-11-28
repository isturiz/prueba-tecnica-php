<?php
// ajax/add-category-product.php

include 'functions.php';

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera los datos del formulario
  $name = $_POST["name"];

  // Prepara la consulta de inserción
  $sql = "INSERT INTO categorias (nombre) VALUES (?)";

  // Llama a la función para ejecutar la consulta
  executeQuery($sql, [$name]);
} else {
  // Si el formulario no se ha enviado, envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'El formulario no ha sido enviado.']);
}

?>
