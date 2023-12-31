<?php
// ajax/customer.php

include 'functions.php';

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera los datos del formulario
  $first_name = $_POST["first_name"];
  $first_surname = $_POST["first_surname"];
  $email = $_POST["email"];
  $identify_rif = $_POST["identify_rif"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  // Prepara la consulta de inserción
  $sql = "INSERT INTO clientes (primer_nombre, primer_apellido, cedula_rif, telefono, direccion, correo_electronico) VALUES (?, ?, ?, ?, ?, ?)";

  // Llama a la función para ejecutar la consulta
  executeQuery($sql, [$first_name, $first_surname, $identify_rif, $phone, $address, $email]);
} else {
  // Si el formulario no se ha enviado, envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'El formulario no ha sido enviado.']);
}

?>
