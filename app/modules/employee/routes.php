<?php
/**
 * /app/modules/employee/routes.php
 * Employee Routes
 */

use Bims\Core\Router;

Router::get('/employee', function () {
    echo "Employee Dashboard";
});

Router::get('/employee/profile', function () {
    echo "Employee Profile Page";
});

Router::post('/employee/profile/update', function () {
    echo "Updating profile...";
});
