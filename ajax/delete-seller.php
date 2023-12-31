<?php
// ajax/delete-seller.php

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] === "DELETE" && isset($_GET['id_seller'])) {
  $sellerId = $_GET['id_seller'];

  // Llama a la función para eliminar el registro
  deleteRecord('vendedores', 'id_vendedor', $sellerId);
} else {
  // Si la solicitud no es DELETE o no incluye el parámetro 'id', envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'Solicitud no válida.']);
}

?>
