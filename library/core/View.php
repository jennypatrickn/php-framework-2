<?php

namespace library\core;

/**
 * Class View
 *  
 *  Générateur de vue
 * 
 * @author N Jenny Patrick
 */
class View {

    private $file,
            $title,
            $data;

    public function __construct($action, $controller = '') {       
        $file = '../application/view/';
        if ($controller != '') {
            $file = $file . $controller . '/';
        }
        $this->file = $file . $action . '.php';
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Affiche le rendu de la page
     * 
     * @param array $data
     * @param String $template
     */
    public function render($data, $template) {
        $this->data = $data;
        $content = $this->generateFile($this->file, $data);
        
        $view = $this->generateFile('../application/view/' . $template . '.php', array('title' => $this->title,
            'content' => $content
                )
        );

        echo $view;
    }

    /**
     * Génère un fichier vue et renvoie le résultat produit
     * 
     * @param String $file
     * @param array $data
     * @return String
     * @throws \Exception
     */
    private function generateFile($file, $data) {
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        } else {
            throw new \Exception('Le fichier ' . $file . ' n\'existe pas');
        }
    }

    /**
     * Nettoie une valeur insérée dans une page HTML pour éviter les injection de code (XSS)
     * 
     * @param mixed $valeur
     * @return mixed type
     */
    public function sanitize($valeur) {
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }

    public function getData($name) {
        if (in_array($name, $this->data)) {
            return $this->data[$name];
        }
    }

}
