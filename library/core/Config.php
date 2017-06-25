<?php

namespace library\core;

/**
 * Class Config
 * 
 *  Encapsule un tableau contenant les paramètres de configuration
 *
 * @author N Jenny Patrick
 */
class Config {

    private static $param;
    
    /**
     * Renvoie la valeur d'un paramètre de configuration
     * 
     * @param String $name
     * @param mixed $default
     * @return mixed
     */
    public static function get($name, $default = null) {
        if (isset(self::getParam()[$name])) {
            $value = self::getParam()[$name];
        } else {
            $value = $default;
        }
        return $value;
    }

    /**
     * Renvoie le tableau des paramètres en le chargeant au besoin
     * 
     * @return array
     * @throws \Exception
     */
    private static function getParam() {
        if (self::$param == null) {
            $file = "../config/apps.ini";
            if (!file_exists($file)) {
                throw new \Exception("Aucun fichier de configuration trouvé");
            } else {
                self::$param = parse_ini_file($file);
            }
        }
        return self::$param;
    }

}
