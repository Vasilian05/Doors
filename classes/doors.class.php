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

    public function getFilteredProducts(array $prices = [], array $brands = []): array
{

    $sql = "SELECT * FROM Door WHERE 1=1";
    $params = [];

    // Add price filters to the query
    if (!empty($prices)) {
        $priceConditions = [];
        foreach ($prices as $price) {
            $priceConditions[] = 'price <= ?';
            $params[] = $price;
        }
        $sql .= ' AND (' . implode(' OR ', $priceConditions) . ')';
    }

    // Add brand filters to the query
    if (!empty($brands)) {
        $brandPlaceholders = implode(',', array_fill(0, count($brands), '?'));
        $sql .= " AND brand IN ($brandPlaceholders)";
        $params = array_merge($params, $brands);
    }

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll();
}


}