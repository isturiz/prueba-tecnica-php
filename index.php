<?php



// require_once BASE_PATH . 'config/config.php';

// include BASE_PATH . '/views/index.php';

// Load the configuration
require_once __DIR__ . '/config/config.php';
require_once 'controllers/seller.php';
require_once 'controllers/product.php';
require_once 'controllers/customer.php';

//  require_once 'api.php';





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VentaClean: Sistema de Gestión de Ventas</title>
  <link rel="stylesheet" href="public/css/output.css">
  <script src="node_modules/flowbite/dist/datepicker.js"></script>
  <script src="node_modules/flowbite/dist/flowbite.js"></script>

  <link rel="shortcut icon" type="image/jpg" href="public/img/favicon.ico"/>

</head>

<body>
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  ?>
  <?php include_once 'views/includes/navbar.php' ?>
  <?php include_once 'views/includes/sidebar.php' ?>

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 bg-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

      <!-- Sellers -->
      <?php
      $sellerController = new SellersController($db);
      $sellerController->showSellers();
      ?>
      <?php include_once 'views/sellers.php' ?>


      <!-- Products -->
      <?php
      $productController = new ProductsController($db);
      $productController->showProducts();
      ?>
      <?php include_once 'views/products.php' ?>

      <!-- Customers -->
      <?php
      $productController = new CustomersController($db);
      $productController->showCustomers();
      ?>
      <?php include_once 'views/customers.php' ?>
    </div>
  </div>
  <!-- <script src="public/js/test.js"></script> -->

  <script src="public/js/sellers.js"></script>
  <script src="public/js/search.js"></script>
  <script src="public/js/addModal.js"></script>


</body>

</html>