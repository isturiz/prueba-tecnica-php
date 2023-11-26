<?php
// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $first_name = $_POST["first_name"];
    $first_surname = $_POST["first_surname"];
    $identify_rif = $_POST["identify_rif"];
    $phone = $_POST["phone"];

    // Incluye la configuración de la base de datos
    include 'config/api_config.php';

    // Conecta con la base de datos
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Prepara la consulta de inserción
    $sql = "INSERT INTO vendedores (primer_nombre, primer_apellido, cedula_rif, telefono) VALUES ('$first_name', '$first_surname', '$identify_rif', '$phone')";

    // Ejecuta la consulta sb
    if ($conn->query($sql) === TRUE) {
        // Redirige de vuelta a la página de origen con un mensaje de éxito
        // header("Location: {$_SERVER['HTTP_REFERER']}?message=Registro insertado correctamente en la base de datos.");
        header("Location: {$_SERVER['HTTP_REFERER']}#sellers");
        exit();
    } else {
        // Redirige de vuelta a la página de origen con un mensaje de error
        // header("Location: {$_SERVER['HTTP_REFERER']}?error=Error al insertar el registro: " . $conn->error);
        exit();
    }

    // Cierra la conexión
    $conn->close();
} else {
    // Si el formulario no se ha enviado, puedes redirigir o mostrar un mensaje de error
    echo "El formulario no ha sido enviado.";
}
?>

<script>
  // showSection(simpleIds.sellers)
  // showSection()
  // document.getElementById(linkIds.sellers).addEventListener('click', () => showSection(simpleIds.sellers));
</script>
