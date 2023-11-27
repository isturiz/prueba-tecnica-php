<?php

// Load the configuration
require_once __DIR__ . '/config/config.php';
require_once 'controllers/seller.php';
require_once 'controllers/product.php';
require_once 'controllers/customer.php';

require_once 'controllers/ajax.php';


if (isset($_GET['action']) && $_GET['action'] === 'getUpdatedSellers') {
  $ajaxSellerController = new AjaxSellerController($db);
  $ajaxSellerController->getUpdatedSellers();
}

if (isset($_GET['action']) && $_GET['action'] === 'getUpdatedCustomers') {
  $ajaxCustomerController = new AjaxCustomerController($db);
  $ajaxCustomerController->getUpdatedCustomers();
}

if (isset($_GET['action']) && $_GET['action'] === 'getUpdatedProducts') {
  $ajaxProductController = new AjaxProductController($db);
  $ajaxProductController->getUpdatedProducts();
}



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

  <link rel="shortcut icon" type="image/jpg" href="public/img/favicon.ico" />

  <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark')
    }
  </script>
</head>

<body class="dark:bg-gray-700">
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  ?>
  <?php include_once 'views/includes/navbar.php' ?>
  <?php include_once 'views/includes/sidebar.php' ?>

  <div class="p-4 sm:ml-64">
    <div class="p-4 bg-gray-200 dark:bg-gray-800 rounded-lg mt-14">

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

  <script src="public/js/sections.js"></script>
  <script src="public/js/search.js"></script>
  <script src="public/js/dark-mode.js"></script>


  <!-- AJAX -->
  <script src="public/js/ajax/updateTables.js"></script>
  <script src="public/js/ajax/delete.js"></script>
  <script src="public/js/ajax/add.js"></script>






</body>

</html>