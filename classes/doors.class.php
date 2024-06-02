<?php include_once 'config.php'; 

class Doors extends Dbh {

    
    public function getProducts($category){

        //make a query to get all items
        $stmt = $this->connect()->prepare("SELECT * FROM Door WHERE category_id = ?");

        if($stmt->execute([$category])){
            return $stmt->fetchAll();
        }else{
            $stmt = null;
            exit();
        }
    }

    public function getDoor($id){

        //get door from db
        $stmt = $this->connect()->prepare("SELECT * FROM Door WHERE door_id = ?");

        if($stmt->execute([$id])){
            //if statemet is successfull fetch the door information
            $item = $stmt->fetchAll();
            $stmt = null;
            return $item;
        }else{
            //if statement fails return false
            $stmt = null;
            return false;
        }
    }
}