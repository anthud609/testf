<?php
namespace Bims\Core;

class Controller
{
    protected function view(string $view, array $data = [], ?string $layout = 'main')
    {
        extract($data);
    
        $viewPath = __DIR__ . '/../modules/' . $view . '.php';
    
        if (!file_exists($viewPath)) {
            // fallback to global views dir
            $viewPath = __DIR__ . '/../views/' . $view . '.php';
        }
    
        if (!file_exists($viewPath)) {
            throw new \Exception("View {$view} not found");
        }
    
        if ($layout) {
            $layoutPath = __DIR__ . '/../views/layouts/' . $layout . '.php';
            if (!file_exists($layoutPath)) {
                throw new \Exception("Layout {$layout} not found");
            }
    
            ob_start();
            require $viewPath;
            $content = ob_get_clean();
    
            require $layoutPath;
        } else {
            require $viewPath;
        }
    }
    
}
