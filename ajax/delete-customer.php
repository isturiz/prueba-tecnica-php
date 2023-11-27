<?php
// ajax/delete-customer.php

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] === "DELETE" && isset($_GET['id_customer'])) {
  $customerId = $_GET['id_customer'];

  // Llama a la función para eliminar el registro
  deleteRecord('clientes', 'id_cliente', $customerId);
} else {
  // Si la solicitud no es DELETE o no incluye el parámetro 'id', envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'Solicitud no válida.']);
}

?>
