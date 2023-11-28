<?php
// ajax/delete-category-product.php

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] === "DELETE" && isset($_GET['id_category-product'])) {
  $categoryProductId = $_GET['id_category-product'];

  // Llama a la función para eliminar el registro
  deleteRecord('categorias', 'id_categoria', $categoryProductId);
} else {
  // Si la solicitud no es DELETE o no incluye el parámetro 'id', envía una respuesta JSON con un mensaje de error
  echo json_encode(['success' => false, 'error' => 'Solicitud no válida.']);
}

?>
