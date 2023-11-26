<?php
require_once 'models/product.php';

class ProductsController
{
  private $productModel;

  public function __construct($db)
  {
    $this->productModel = new ProductModel($db);
  }

  public function showProducts()
  {
    $products = $this->productModel->getProducts();
    include 'views/products.php';
  }
}
