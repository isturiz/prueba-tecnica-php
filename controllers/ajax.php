<?php 
// controllers/ajax.php
require_once 'models/seller.php';
require_once 'models/customer.php';
require_once 'models/product.php';


class AjaxSellerController
{
  private $sellerModel;

  public function __construct($db)
  {
    $this->sellerModel = new SellerModel($db);
  }

  public function getUpdatedSellers()
  {
    $sellers = $this->sellerModel->getSellers();
    echo json_encode(['success' => true, 'response' => $sellers]);
    exit();
  }
}



class AjaxCustomerController
{
  private $customerModel;

  public function __construct($db)
  {
    $this->customerModel = new CustomerModel($db);
  }

  public function getUpdatedCustomers()
  {
    $customers = $this->customerModel->getCustomers();
    echo json_encode(['success' => true, 'response' => $customers]);
    exit();
  }
}

class AjaxProductController
{
  private $productModel;

  public function __construct($db)
  {
    $this->productModel = new ProductModel($db);
  }

  public function getUpdatedProducts()
  {
    $products = $this->productModel->getProducts();
    echo json_encode(['success' => true, 'response' => $products]);
    exit();
  }
}

class AjaxCategoryProductController
{
  private $categoryProductModel;

  public function __construct($db)
  {
    $this->categoryProductModel = new CategoryProductModel($db);
  }

  public function getUpdatedProducts()
  {
    $categoryProducts = $this->categoryProductModel->getCategoryProducts();
    echo json_encode(['success' => true, 'response' => $categoryProducts]);
    exit();
  }
}

