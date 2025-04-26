<?php
/**
 * /app/core/App.php
 * Application Class
 */
namespace Bims\Core;

class App
{
    public function run(): void
    {
        // Load top-level routes
        require_once __DIR__ . '/../routes.php';

        // Load module routes
        foreach (glob(__DIR__ . '/../modules/*/routes.php') as $moduleRouteFile) {
            require_once $moduleRouteFile;
        }

        // Dispatch (assumes you have a Router class ready)
        Router::dispatch();
    }
}
