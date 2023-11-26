<?php

require_once 'models/connexion.php';

class ProductModel extends BaseModel
{
  public function getProducts()
  {
    $query = "SELECT * FROM productos";
    $errorMessage = "Error to get products: ";
    return $this->fetchData($query, $errorMessage);
  }
}
