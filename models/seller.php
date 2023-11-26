<?php

require_once 'models/connexion.php';

class SellerModel extends BaseModel
{
  public function getSellers()
  {
    $query = "SELECT * FROM vendedores";
    $errorMessage = "Error to get sellers: ";
    return $this->fetchData($query, $errorMessage);
  }
}
