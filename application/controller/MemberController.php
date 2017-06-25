<?php

namespace application\controller;

use library\core\Controller;
/**
 * Class MemberController
 *
 * @author N Jenny Patrick
 */
class MemberController extends Controller {
    public function index(){

    }

    public function seConnecter() {
        
        $this->render(array(), 'seconnecter');
    }
    public function traiterConnexion() {
    	
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $login = $this->request->get('mail');
            $password = $this->request->get('motDePasse');

            if ($login != \library\core\Config::get('appUser') || $password != \library\core\Config::get('appPassword')) {
                $this->render(array('error' => 'Login ou mot de passe incorrect'), 'seconnecter');
                exit();
            }
            $_SESSION['auth'] = true;
            $this->execute('getHomePageMP');
            exit();
        }
        $this->render(array(), 'seconnecter');
    }
    public function getHomePageMP(){
    	 $this->render(array(), 'member_connected','layout');
    }

    public function getLivContent(){
    	$this->render(array(), 'contenu_livraison','layout_rp');
    }

    public function getMyReservation(){
    	$this->render(array(), 'mes_reservations','layout_rp');
    }
    public function getViewForSignin(){
    	$this->render(array(), 'inscription_connex','layout_rp');
    }
    public function getViewForOnLineRsrv(){
    	$this->render(array(), 'reserver_enligne','layout_rp');
    }
    public function getViewForLogin(){
        $this->render(array(), 'login','layout_admin');
    }


    /***Quand l'utilisateur arrive à seconnecter : les vues dans l'espaces membres***/
    public function showMyFacture(){
        $this->render(array(), 'my_facture','layout');
    }
    public function showConversation(){
        $this->render(array(), 'conversation','layout');
    }
}
