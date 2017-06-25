<?php

namespace library\vendor;

/**
 * Class FTPMonitoring
 * 
 *  Encapsule tous les méthodes de surveillance du serveur FTP 
 *
 * @author N Jenny Patrick
 */
class FTPMonitoring {

    private  $connection;
    public function __construct($host, $port=21){
        $this->connection = $this->connect($host,$port);
    }
        /**
     * Renvoie la valeur d'un paramètre de configuration
     * 
     * @param String $name
     * @param mixed $default
     * @return mixed
     */
    public function connect($host, $port = 21) {
        return ftp_connect($host,$port) or die('Impossible de se connecter au serveur FTP << Hôte : $host >>');
    }
    public function login( $user, $password){
        if(ftp_login($this->connection, $user, $pass)) {
            return true;
        }
        return false;
    }
    /* Récupérer la liste des répertoires 
    *  Comparaison
    */
    public function getListOfDir(){
        if($login==true)
        
        $files = ftp_nlist($this->connection, $remote_dir);
    $ftpFiles =array();
    foreach ($files as $file ) {
        // Obtenir juste le nom de fichier sans informations d'annuaire
        $thisFile = basename($file);
        if($thisFile != '.' && $thisFile != '..'){
             // Append to our new array
            $ftpFiles[] = $thisFile;
        }
    }
    }

}
