<?php

namespace Code;

use http\Exception\RuntimeException;

class Route
{
    protected $route;

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
        return $this;
    }

    //Funcio per rebre un array de rutes i assignar a la propietat rutes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //Funcio per redirigir la url solicitada a un controlador
    public function redirect($uri) {
        //si ruta no existeix redirigim a vista d'error
        if (!array_key_exists($uri, $this->routes)){
            require '../resources/views/404.php';
            return $this;
        }
        //si no troba el controlador
        if (!file_exists($this->routes[$uri])) {
            throw new RuntimeException("No s'ha trobat el controlador:" . $this->routes[$uri]);
        }
        require $this->routes[$uri];
        return $this;
    }
}