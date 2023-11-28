<?php
require_once 'models/categoryProduct.php';

class CategoryProductsController
{
  private $categoryProductModel;

  public function __construct($db)
  {
    $this->categoryProductModel = new CategoryProductModel($db);
  }

  public function showCategoryProducts()
  {
    $categoryProducts = $this->categoryProductModel->getCategoryProducts();
    include 'views/categoryProducts.php';
  }
}
