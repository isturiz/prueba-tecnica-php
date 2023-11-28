<?php
// models/categoryProduct.php
require_once 'models/connexion.php';

class CategoryProductModel extends BaseModel
{
  public function getCategoryProducts()
  {
    $query = "SELECT * FROM categorias";
    $errorMessage = "Error to get categoryProduct: ";
    return $this->fetchData($query, $errorMessage);
  }
}
