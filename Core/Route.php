<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        //partim la url
        $parts = explode('/', trim($uri, '/'));
        //indiquem ruta del controlador
        $controller = 'App\Controllers\FilmController';

        //Inici
        if ($uri === '/') {
            require '../App/Controllers/HomeController.php';
            $controllerInstance = new \App\Controllers\HomeController();
            return $controllerInstance->index();
        }

        // Film routes
        if ($parts[0] === 'films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        }

        if ($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        }

        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        }

        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('ID no proporcionat');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        if ($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        }

        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            $data = $_POST;
            if (!isset($_POST['id'])) {
                throw new RuntimeException('ID no proporcionat');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        if ($parts[0] === 'show' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $controller();
            return $controllerInstance->show($parts[1]);
        }


        $controller = 'App\Controllers\SeriesController';

        if ($parts[0] === 'series') {
            require '../App/Controllers/SeriesController.php';
            $controllerInstance = new $controller();

            switch (isset($parts[1]) ? $parts[1] : '') {
                case '':
                    return $controllerInstance->index();
                case 'create':
                    return $controllerInstance->create();
                case 'store':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $data = $_POST;
                        return $controllerInstance->store($data);
                    }
                    break;
                case 'edit':
                    if (isset($parts[2])) {
                        return $controllerInstance->edit($parts[2]);
                    }
                    break;
                case 'update':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($parts[2])) {
                        $data = $_POST;
                        return $controllerInstance->update($parts[2], $data);
                    }
                    break;
                case 'delete':
                    if (!isset($parts[2])) {
                        throw new RuntimeException('ID no trobat a la URL.');
                    }
                    return $controllerInstance->delete($parts[2]);

                case 'destroy':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($parts[2])) {
                        return $controllerInstance->destroy($parts[2]);
                    }
                    break;
                case 'show':
                    if (isset($parts[2])) {
                        return $controllerInstance->show($parts[2]);
                    }
                    break;
                default:
                    throw new RuntimeException('Ruta no trobada');
            }
        }
        throw new RuntimeException('Ruta no trobada');
    }
}