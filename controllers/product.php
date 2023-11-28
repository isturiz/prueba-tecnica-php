<?php
require_once 'models/product.php';
require_once 'models/categoryProduct.php';

class ProductsController
{
  private $productModel;
  private $categoryProductModel;


  public function __construct($db)
  {
    $this->productModel = new ProductModel($db);
    $this->categoryProductModel = new CategoryProductModel($db);
  }

  public function showProducts()
  {
    $products = $this->productModel->getProducts();
    $categoryProducts = $this->categoryProductModel->getCategoryProducts();
    include 'views/products.php';
  }
}
