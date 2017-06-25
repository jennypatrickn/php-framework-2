<?php

namespace library\vendor\File;

/**
 * Class LogsParser
 *
 * @author N Jenny Patrick
 */
class LogsParser {

    protected $error = null;
    protected $maxFileSize;
    protected $file;
    protected $fileName;

    const ERROR_EXTENSION = "Extension invalide";
    const ERROR_SIZE = "Fichier trop grand";
    const ERROR_UPDLOAD = "Impossible d'uploader le fichier";
    const SUCCESS = "SUCCESS";

    public function __construct() {
    }
    
    public function hasError(){
        return ($this->error != null);
    }

    public function getError() {
        return $this->error;
    }
    
    public function getFileName(){
        return $this->fileName;
    }

    public function setMaxFileSize($maxFileSize) {
        $this->maxFileSize = $maxFileSize;
    }

    public function uploadFile($file) {
        $this->error = self::SUCCESS;
        if ($file['size'] <= $this->maxFileSize) {
            $photos = pathinfo($file['name']);
            $this->fileName = $file['name'];
            $extensionUpload = $photos['extension'];
            $extensionsAutorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extensionUpload, $extensionsAutorisees)) {
                if (!move_uploaded_file($file['tmp_name'], 'assets/img/' . basename($file['name']))) {
                    $this->error = self::ERROR_UPDLOAD;
                }
            } else {
                $this->error = self::ERROR_EXTENSION;
            }
        }
        else{
            $this->error = self::ERROR_SIZE;
        }
        
    }
    
    public function fileUploaded() {
        if($this->error == self::SUCCESS){
            return true;
        }
        return true;
    }

}
