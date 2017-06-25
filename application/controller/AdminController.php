<?php

namespace application\controller;

use library\core\Controller;
/**
 * Class AdminController
 *
 * @author N Jenny Patrick
 */
class AdminController extends Controller {
    public function index(){

    }

    public function getPageLogin () {
        
        $this->render(array(), 'login','layout_admin');
    }
        public function getHomePageAS(){
    	 $this->render(array(), 'admin_connected','layout');
    }
        public function showCalendar(){
    	 $this->render(array(), 'calendrier','layout');
    }
}
