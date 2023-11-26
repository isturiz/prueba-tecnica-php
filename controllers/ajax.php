<?php 
// controllers/ajax.php
require_once 'models/seller.php';

class AjaxController
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
