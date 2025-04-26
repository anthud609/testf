<?php
/**
 * /app/routes.php
 * Default Routes for Core Application
 */

use Bims\Core\Router;

// Root URL
Router::get('/', function () {
    echo "Welcome to BIMS";
});

// Example non-module route
Router::get('/status', function () {
    echo json_encode(['status' => 'ok']);
});
