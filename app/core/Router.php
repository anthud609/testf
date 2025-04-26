<?php
/**
 * /app/core/Router.php
 * Router Class
 */
namespace Bims\Core;

class Router
{
    protected static array $routes = [];

    public static function get(string $uri, callable $action): void
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post(string $uri, callable $action): void
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Remove trailing slash unless it's root
        $uri = rtrim($uri, '/') ?: '/';

        if (isset(self::$routes[$method][$uri])) {
            $action = self::$routes[$method][$uri];
            call_user_func($action);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
