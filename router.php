<?php
// router.php

// Load necessary files
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/vendor/autoload.php';

// Simple router logic
$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '/':
        // Handle the root URL, you might want to redirect or show a welcome page
        break;

    case '/sale':
        // Handle sales-related requests
        // require_once __DIR__ . '/controllers/SaleController.php';
        // $controller = new SaleController();
        // $controller->handleRequest();
        break;

    case '/stats':
        // Handle statistics-related requests
        // require_once __DIR__ . '/controllers/StatsController.php';
        // $controller = new StatsController();
        // $controller->handleRequest();
        break;

    default:
        // Handle 404 Not Found
        http_response_code(404);
        echo '404 Not Found';
        break;
}
