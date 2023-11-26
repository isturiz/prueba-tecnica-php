<?php 
// controllers/ajax.php
require_once 'models/seller.php';
require_once 'models/customer.php';

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
    echo json_encode(['success' => true, 'sellers' => $sellers]);
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
    echo json_encode(['success' => true, 'sellers' => $customers]);
    exit();
  }
}