<?php

namespace MVC;

class Router {
    protected $routes = [];

    public function addRoute($route, $controller, $action) {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($uri) {
        // Iterate through routes and check for matches
        foreach ($this->routes as $route => $info) {
            // Escape special characters in route pattern and replace dynamic parts with regex
            $pattern = preg_replace('/\//', '\/', $route);
            $pattern = preg_replace('/\{([^}]+)\}/', '(?P<\1>[^\/]+)', $pattern);
            $pattern = '/^' . $pattern . '$/';

            // Check if the URI matches the pattern
            if (preg_match($pattern, $uri, $matches)) {
                // Extract controller and action
                $controller = $info['controller'];
                $action = $info['action'];

                // Remove the full match from the matches array
                array_shift($matches);

                // Call the controller action with matched parameters
                $controllerInstance = new $controller();
                call_user_func_array([$controllerInstance, $action], $matches);

                // Exit the dispatch loop after successful match
                return;
            }
        }

        // If no route matches, throw an exception
        throw new \Exception("No route found for URI: $uri");
    }

}
