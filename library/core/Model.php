<?php

namespace library\core;

/**
 * Class Model
 * 
 *  Centralise les services d'accès à une base de données
 * 
 * @author N Jenny Patrick
 */
abstract class Model {

    private static $db;

    /**
     * Execution d'une requete
     * 
     * @param String $sql
     * @param array $param
     * @return PDOStatement
     */
    protected function executeQuery($sql, $param = null) {
        if ($param == null) {
            $result = self::getDb()->query($sql);
        } else {
            $result = self::getDb()->prepare($sql);
            $result->execute($param);
        }
        return $result;
    }
    
    /**
     * Execute une requete et retourne le dernier id
     * 
     * @param String $sql
     * @param array $param
     * @return mixed
     */
    protected function executeAndFindLastId($sql, array $param ){
        if ($param == null) {
            $result = self::getDb()->query($sql);
        } else {
            $result = self::getDb()->prepare($sql);
            $result->execute($param);
        }
        return self::getDb()->lastInsertId();
    }

    /**
     * Renvoie un objet de connexion à la BDD
     * 
     * @return PDO
     */
    private static function getDb() {
        if (self::$db === null) {
            $host = Config::get('dbHost');
            $user = Config::get('dbUser');
            $password = Config::get('dbPassword');
            $name = Config::get('dbName');
            self::$db = new \PDO('mysql:host=' . $host . ';dbname=' . $name, $user, $password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        }
        return self::$db;
    }
    

}
