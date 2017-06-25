<?php

namespace library\core;

/**
 * Class Request
 *
 * @author N Jenny Patrick
 */
class Request {

    private $param;

    public function __construct($param) {
        $this->param = $param;
    }

    /**
     *  Renvoie vrai si le paramètre existe dans la requête
     * 
     * @param String $name
     * @return boolean
     */
    public function paramExist($name) {
        return(isset($this->param[$name]) && $this->param[$name] != "");
    }

    /**
     * Renvoie la valeur du paramètre demandé
     * 
     * @param String $nom
     * @return mixed
     * @throws \Exception
     */
    public function get($nom) {
        if ($this->paramExist($nom)) {
            return $this->param[$nom];
        } else {
            throw new \Exception("Paramètre '$nom' absent de la requête");
        }
    }
    
    /**
     * Renvoi le tableau de tout les paramètres
     * 
     * @return array
     */
    public function getParam(){
        return $this->param;
    }

}
