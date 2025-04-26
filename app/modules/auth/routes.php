<?php
/**
 * /app/modules/auth/routes.php
 * Auth Routes
 */
use Bims\Core\Router;

Router::get('/auth/login', function () {
    echo "Auth Login Page";
});

Router::post('/auth/login', function () {
    echo "Processing login...";
});

Router::get('/auth/logout', function () {
    echo "Logging out...";
});
