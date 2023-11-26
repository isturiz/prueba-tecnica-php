<?php

require_once 'models/connexion.php';

class CustomerModel extends BaseModel
{
  public function getCustomers()
  {
    $query = "SELECT * FROM clientes";
    $errorMessage = "Error to get customers: ";
    return $this->fetchData($query, $errorMessage);
  }
}
