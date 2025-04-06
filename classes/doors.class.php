<?php include_once 'config.php'; 

class Doors extends Dbh {

    
    public function getProducts($category){

        //the query retrieves all items in a specified category regardless of the brand brands
        $stmt = $this->connect()->prepare(
            "SELECT * 
            FROM Door 
            JOIN Brand_Category ON Door.brand_category_id = Brand_Category.brand_category_id
            JOIN Category ON Category.category_id = Brand_Category.category_id 
            WHERE Category.category_id = ? ");

        if($stmt->execute([$category])){
            return $stmt->fetchAll();
        }else{
            $stmt = null;
            exit();
        }
    }

    public function deleteDoor($id){
        $stmt = $this->connect()->prepare('DELETE FROM Door WHERE door_id = ?');

        if($stmt->execute([$id])){
            $stmt = null;
            return true;
        }else{
            $stmt = null;
            return false;
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

    public function getFilteredProducts(array $filters = []){
        $sql = 'SELECT * FROM Door';
        $params = [];
        $conditions = [];
    
        if (!empty($filters)) {
            foreach ($filters as $filter) {
                if ($filter === "under_600") {
                    $conditions[] = 'price < :under_600';
                    $params[':under_600'] = 600;
                } elseif ($filter === "under_800") {
                    $conditions[] = 'price < :under_800';
                    $params[':under_800'] = 800;
                } elseif ($filter === "over_800") {
                    $conditions[] = 'price > :over_800';
                    $params[':over_800'] = 800;
                }
            }
    
            // Combine conditions into the SQL query with AND to ensure all filters are applied
            if (!empty($conditions)) {
                $sql .= ' WHERE ' . implode(' AND ', $conditions);  // Changed OR to AND
            }
        }
    
        // Prepare and execute the SQL statement
        $stmt = $this->connect()->prepare($sql);
        
        // Bind parameters to avoid SQL injection
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
    
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        } else {
            $stmt = null;
            return false;
        }
    }
    

}