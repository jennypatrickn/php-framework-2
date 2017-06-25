<?php

namespace library\core;

/**
 * Class Controller
 *
 * @author N Jenny Patrick
 */
abstract class Controller {
    
    private $action;
    
    protected $request;
    
    public function setRequest(Request $request) {
        $this->request = $request;
    }

    /**
     * Appel de l'action a éxécuter
     * 
     * @param String $action
     * @throws \Exception
     */
    public function execute($action) {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->setRequest(new Request(array_merge($_GET, $_POST)));
            $this->$action();
        } else {
            $classeControleur = get_class($this);
            throw new \Exception('Action '.$action.' non définie dans la classe '.$classeControleur);
        }
    }

    public abstract function index();

    /**
     * Appel générateur de vue
     * 
     * @param array $data
     * @param String $view
     * @param String $template
     */
    protected function render($data = array(), $view = '', $template =  'default') {

        $controllerClass = get_class($this);
        $temp= str_replace('Controller', '', $controllerClass);
        $controllerWithNameSpace = str_replace('application\controller', '', $temp);
        $controller = str_replace('\\', '/', $controllerWithNameSpace);
        if($view != ''){
            $vue = new View($view, $controller);
        }else{
            $vue = new View($this->action, $controller);
        }
        $vue->render($data, $template);
    }

}
