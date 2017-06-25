<?php

namespace application\controller;

use library\core\Controller;
use application\model\Tarif;

/**
 * Class TarifController
 *
 * @author N Jenny Patrick
 */
class TarifController extends Controller {

    public function index() {
        //PAS D'INDEX
    }

    public function showAll() {
        $tarif = new Tarif();
        $tarifs = $tarif->findAll();
        $this->render(array('tarifs' => $tarifs), 'index');
    }

}
