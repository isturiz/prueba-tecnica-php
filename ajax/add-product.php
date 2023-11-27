<?php
// ajax/add-seller.php

include 'functions.php';

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera los datos del formulario
  $name = $_POST["name"];
  $base_price = $_POST["base_price"];
  $discount = $_POST["discount"];
  $id_category = $_POST["id_category"];

  // Prepara la consulta de inserción
  $sql = "INSERT INTO productos (nombre, precio_base, descuento, id_categoria) VALUES (?, ?, ?, ?)";

  // Llama a la función para ejecutar la consulta
  executeQuery($sql, [$name, $base_price, $discount, $id_category]);
} else {
  // Si el formulario no se ha enviado, envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'El formulario no ha sido enviado.']);
}

?>
