<?php
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($db->connect_error) {
  die('Database connexion error:' . $db->connect_error);
}

// BaseModel for get data from database.
class BaseModel {
  protected $db;

  public function __construct($db) {
      $this->db = $db;
  }

  protected function fetchData($query, $errorMessage) {
      $result = $this->db->query($query);

      if (!$result) {
          die("Error: " . $errorMessage . $this->db->error);
      }

      $data = [];
      while ($row = $result->fetch_assoc()) {
          $data[] = $row;
      }

      return $data;
  }
}