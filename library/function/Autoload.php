<?php

/**
 * Autochargement des classes
 */

function autoload($className) {
    //$class = __DIR__.'/../../'.$className.'.php';
    $class = '../'.str_replace('\\','/',$className).'.php';
    if(file_exists($class)){
        require $class;
    }
}

spl_autoload_register('autoload');