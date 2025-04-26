<?php
/**
 * /app/modules/employee/routes.php
 * Employee Routes
 */

use Bims\Core\Router;

Router::get('/employee', function () {
    echo "Employee Dashboard";
});
use Bims\Modules\Employee\Controllers\EmployeeController;

Router::get('/employee/profile', [EmployeeController::class, 'profile']);


Router::post('/employee/profile/update', function () {
    echo "Updating profile...";
});
