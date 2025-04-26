<?php
/**
 * /app/core/Router.php
 * Router Class
 */
namespace Bims\Core;

class Router
{
    protected static array $routes = [];

    public static function get(string $uri, mixed $action): void
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
        $uri = rtrim($uri, '/') ?: '/';
    
        if (isset(self::$routes[$method][$uri])) {
            $action = self::$routes[$method][$uri];
    
            if (is_callable($action)) {
                call_user_func($action);
            } elseif (is_array($action) && count($action) === 2) {
                [$controllerClass, $method] = $action;
    
                if (class_exists($controllerClass)) {
                    $controller = new $controllerClass;
                    if (method_exists($controller, $method)) {
                        $controller->$method();
                        return;
                    }
                }
            }
    
            http_response_code(500);
            echo "Invalid route handler.";
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
    
}
