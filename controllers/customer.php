<?php
require_once 'models/customer.php';

class CustomersController
{
  private $customerModel;

  public function __construct($db)
  {
    $this->customerModel = new CustomerModel($db);
  }

  public function showCustomers()
  {
    $customers = $this->customerModel->getCustomers();
    include 'views/customers.php';
  }
}
