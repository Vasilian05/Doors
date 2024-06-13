<?php 
include_once 'config.php';

class Distributor extends Dbh {

    private $is_distributor = 1;

    public function getDistributors(){
        $stmt = $this->connect()->prepare('SELECT * FROM User WHERE is_distributor = ?');

        if($stmt->execute([$this->is_distributor])){
            $distributors = $stmt->fetchAll();
            $stmt = null;
            return $distributors;
        }else {
            $stmt = null;
            return false;
        }
    }

    public function deleteDistributor($id){

        $stmt = $this->connect()->prepare('DELETE FROM User WHERE user_id = ?');

        if($stmt->execute([$id])){
            $stmt = null;
            return true;
        }else {
            $stmt = null;
            return false;
        }
    }
}