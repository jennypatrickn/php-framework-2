<?php

namespace application\model;

use library\core\Model;

/**
 * Class Paiement
 *  -------------------------------etat,mode--------------------
 * @author N Jenny Patrick
 */
class Paiement extends Model {

    public function create($id, $nom, $prenom) {

        $sql = 'INSERT INTO acteur SET id = ?, nom = ?, prenom = ?';
        $id2 = $this->executeAndFindLastId($sql, array($id, $nom, $prenom));
    }

    public function findAll() {
        $sql = 'SELECT * FROM tarif';
        $result = $this->executeQuery($sql);
        return $result->fetchAll();
    }
    public function findByLocalisation($localisation) {
        $sql = 'SELECT * FROM tarif WHERE localisation = ?';
        $result = $this->executeQuery($sql, array($localisation));
        return $result->fetchAll();
    }
    
    
    public function exist($id) {
        $sql = 'SELECT * FROM tarif WHERE id = ?';
        $result = $this->executeQuery($sql, array($id));
        return $result->fetch();
    }

    public function delete($id) {
        $sql = 'DELETE FROM tarif where id = ?';
        $this->executeQuery($sql, array($id));

        $this->generateXml();
    }

}
