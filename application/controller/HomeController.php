<?php

namespace application\controller;

use library\core\Controller;
use application\model\Tarif;
/**
 * Class HomeController
 *
 * @author N Jenny Patrick
 */
class HomeController extends Controller {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $this->request->get('login');
            $password = $this->request->get('password');
            if ($login != \library\core\Config::get('appUser') || $password != \library\core\Config::get('appPassword')) {
                $this->render(array('error' => 'Login ou mot de passe incorrect'), 'login', 'ajax');
                exit();
            }
            $_SESSION['auth'] = true;
            $this->execute('index');
            exit();
        }
        $this->render(array(), 'login', 'ajax');
    }


    public function index() {
        $tarif = new Tarif();
        $localisation ='PARIS';
        $tarifsPARIS = $tarif->findByLocalisation($localisation);
        $localisation ='HORS ZONE';
        $tarifsHORSZONE = $tarif->findByLocalisation($localisation);
        $this->render(array('tarifsPARIS' => $tarifsPARIS, 'tarifsHORSZONE' => $tarifsHORSZONE), 'index');
    }

    public function logout() {
        unset($_SESSION['auth']);
        $this->execute('login');
    }

}
