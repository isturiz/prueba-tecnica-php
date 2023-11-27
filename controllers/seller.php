<?php
// controllers/seller.php

require_once 'models/seller.php';

class SellersController
{
  private $sellerModel;

  public function __construct($db)
  {
    $this->sellerModel = new SellerModel($db);
  }

  public function showSellers()
  {
    $sellers = $this->sellerModel->getSellers();
    include 'views/sellers.php';
  }
}
