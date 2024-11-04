<?php

// Simple router

namespace App\Core;

class Router
{

    private $routes;
    public function __construct()
    {
        $this->routes = array();
    }

    /**
     * Add a route to the router.
     *
     * @param string $route URL to associate with the handler
     * @param callable $handler Handler to associate with the URL
     */
    public function add($route, $handler)
    {
        $this->routes[$route] = $handler;
    }

    /**
     * Return the handler for a given URL.
     *
     * @param string $url
     * @return callable|null
     */
    public function run($url = null)
    {
        $url = $url ?? $_SERVER['REQUEST_URI'];
        foreach ($this->routes as $route => $handler) {
            if ($url == $route) {
                return $handler();
            }
        }
    }

    /**
     * Return the array of routes registered with this router.
     *
     * @return array string URL => callable handler
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}
