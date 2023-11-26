<?php
// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera los datos del formulario
  $first_name = $_POST["first_name"];
  $first_surname = $_POST["first_surname"];
  $email = $_POST["email"];
  $identify_rif = $_POST["identify_rif"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  // Incluye la configuración de la base de datos
  include 'config/api_config.php';

  // Conecta con la base de datos
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Verifica la conexión
  if ($conn->connect_error) {
    // Envía una respuesta JSON con error de conexión
    echo json_encode(['success' => false, 'error' => 'Error de conexión: ' . $conn->connect_error]);
    exit();
  }

  // Prepara la consulta de inserción
  $sql = "INSERT INTO clientes (primer_nombre, primer_apellido, cedula_rif, telefono, direccion) VALUES ('$first_name', '$first_surname', '$identify_rif', '$phone', '$address')";

  // Ejecuta la consulta
  if ($conn->query($sql) === TRUE) {
    // Envía una respuesta JSON exitosa
    echo json_encode(['success' => true, 'message' => 'Registro insertado correctamente en la base de datos.']);
    
    exit();
  } else {
    // Envía una respuesta JSON con error
    echo json_encode(['success' => false, 'error' => 'Error al insertar el registro: ' . $conn->error]);
    exit();

  }

  // Cierra la conexión
  $conn->close();
} else {
  // Si el formulario no se ha enviado, envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'El formulario no ha sido enviado.']);
}
