<?php

require_once 'models/connexion.php';

class ProductModel extends BaseModel
{
  public function getProducts()
  {
    // $query = "SELECT * FROM productos";
    $query = "SELECT productos.*, categorias.id_categoria AS id_categoria, categorias.nombre AS nombre_categoria
              FROM productos
              LEFT JOIN categorias ON productos.id_categoria = categorias.id_categoria";
    $errorMessage = "Error to get products: ";
    return $this->fetchData($query, $errorMessage);
  }
}
