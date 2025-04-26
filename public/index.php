<?php
/**
 * /public/index.php
 * Front Controller
 */

require_once __DIR__ . '/../app/bootstrap.php';


// Import the App class from its namespace
use Bims\Core\App;

// Load the application
$app = new App();

// Run the application  
$app->run();
