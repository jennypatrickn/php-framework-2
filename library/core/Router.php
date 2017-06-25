<?php

namespace library\core;

/**
 * Class Router
 * 
 *  déduit le contrôleur à utiliser et l'action à appeler
 *
 * @author N Jenny Patrick
 */
class Router {

    private $action;

    /**
     * Recherche du controlleur et execution de l'action
     */
    public function route() {
        try {
            $request = new Request(array_merge($_GET, $_POST));
            $controller = $this->getController($request);

            $controller->execute($this->action);
        } catch (\Exception $e) {
            $view = new View('Error/exception');
            $view->render(array('error' => $e->getMessage()), 'default');
        }
    }

    /**
     * Recherche controlleur et action
     * 
     * @param \library\core\Request $request
     * @return \library\core\controller
     * @throws \Exception
     */
    private function getController(Request $request) {
        $dom = new \DOMDocument;
        $dom->load('../config/routes.xml');

        foreach ($dom->getElementsByTagName('route') as $route) {
            
            if (preg_match('`^' . $route->getAttribute('url') . '$`', $_SERVER['REQUEST_URI'], $matches)) {
                $module = $route->getAttribute('module');
                $this->action = $route->getAttribute('action');

                $classname = $module . 'Controller';
                $file = '../application/controller/' . $classname . '.php';

                if (!file_exists($file)) {
                    throw new \Exception('Le fichier ' . $file . ' n\'existe pas');
                }

                $controller = '\\application\\controller\\' . $classname;

                $this->addUrlVar($route, $matches);

                return new $controller();
            }
            
        }

        throw new \Exception('Erreur 404 La page demandé n\'existe pas');
    }

    /**
     * Ajout d'une variable d'url
     * @param mixed $route
     * @param mixed $matches
     */
    private function addUrlVar($route, $matches) {
        if ($route->hasAttribute('vars')) {
            $vars = explode(',', $route->getAttribute('vars'));
            foreach ($matches as $key => $match) {
                if ($key !== 0) {
                    $this->createGetVar($vars[$key - 1], $match);
                }
            }
        }
    }

    /**
     * Ajout d'une valeur dans le variable d'url
     * 
     * @param String $key
     * @param mixed $value
     * @throws \Exception
     */
    private function createGetVar($key, $value) {
        if (empty($key) || empty($value)) {
            throw new \Exception("Impossible de creer get avec valeur vide");
        }
        $_GET[$key] = $value;
    }

}
