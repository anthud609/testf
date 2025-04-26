<?php
/**
 * /public/index.php
 * Front Controller
 */

require_once __DIR__ . '/../app/bootstrap.php';

// Autoloaded via Composer (no need to manually require App.php anymore)

// Import the App class from its namespace
use Bims\Core\App;

// Load the application
$app = new App();

// Run the application  
$app->run();
