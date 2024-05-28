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
}