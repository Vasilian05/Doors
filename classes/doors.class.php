<?php include_once 'config.php'; 

class Doors extends Dbh {

    
    public function getProducts($category){

        //the query retrieves all items in a specified category regardless of the brand 
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

    public function getProductBrand($brand_id){

        //the query retrieves all items in a specified brand regardless of the category 
        $stmt = $this->connect()->prepare(
            "SELECT * 
            FROM Door 
            JOIN Brand_Category ON Door.brand_category_id = Brand_Category.brand_category_id
            JOIN Brand ON Brand.brand_id = Brand_Category.brand_id 
            WHERE Brand.brand_id = ? ");

            if($stmt->execute([$brand_id])){
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

    $sql = "SELECT *
    FROM Door
    JOIN Brand_Category ON Door.brand_category_id = Brand_Category.brand_category_id
    WHERE 1 = 1";
    $params = [];

    // Add price filters to the query
    if (!empty($prices)) {
        $priceConditions = [];
        foreach ($prices as $price) {
            
            $priceConditions[] = 'Door.price <= ?';
            $params[] = $price;
        }
        $sql .= ' AND (' . implode(' OR ', $priceConditions) . ')';
    }

    // Add brand filters to the query
    if (!empty($brands)) {
        
        $brandPlaceholders = implode(',', array_fill(0, count($brands), '?'));
        $sql .= " AND Brand_Category.brand_id IN ($brandPlaceholders)";
        $params = array_merge($params, $brands);
    }

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll();
}

 //Get brand and category information for a specific door
    public function getBrandCategoryForDoor($door_id) {
        $stmt = $this->connect()->prepare(
            "SELECT bc.brand_id, bc.category_id, b.brand_name, c.category_name
             FROM Door d
             JOIN Brand_Category bc ON d.brand_category_id = bc.brand_category_id
             JOIN Brand b ON bc.brand_id = b.brand_id
             JOIN Category c ON bc.category_id = c.category_id
             WHERE d.door_id = ?"
        );
        
        if ($stmt->execute([$door_id])) {
            return $stmt->fetch();
        }
        return false;
    }

    // Get all available brands
    public function getAllBrands() {
        $stmt = $this->connect()->query("SELECT * FROM Brand ORDER BY brand_name");
        return $stmt->fetchAll();
    }

    //Get all available categories
    public function getAllCategories() {
        $stmt = $this->connect()->query("SELECT * FROM Category ORDER BY category_name");
        return $stmt->fetchAll();
    }

    //Get products by brand and category
    public function getProductsByBrandCategory($brand_id, $category_id) {
        $stmt = $this->connect()->prepare(
            "SELECT d.* 
             FROM Door d
             JOIN Brand_Category bc ON d.brand_category_id = bc.brand_category_id
             WHERE bc.brand_id = ? AND bc.category_id = ?"
        );
        
        if ($stmt->execute([$brand_id, $category_id])) {
            return $stmt->fetchAll();
        }
        return false;
    }

    //Update a door's brand_category relationship

    public function updateBrandCategory($door_id, $brand_id, $category_id) {
        // First get or create the brand_category_id
        $brand_category_id = $this->getOrCreateBrandCategory($brand_id, $category_id);
        
        // Then update the door
        $stmt = $this->connect()->prepare(
            "UPDATE Door SET brand_category_id = ? WHERE door_id = ?"
        );
        
        return $stmt->execute([$brand_category_id, $door_id]);
    }

    //Helper method to get or create a brand_category relationship
    private function getOrCreateBrandCategory($brand_id, $category_id) {
        // Check if exists
        $stmt = $this->connect()->prepare(
            "SELECT brand_category_id FROM Brand_Category 
             WHERE brand_id = ? AND category_id = ?"
        );
        
        $stmt->execute([$brand_id, $category_id]);
        $result = $stmt->fetch();
        
        if ($result) {
            return $result['brand_category_id'];
        }
        
        // Create new if doesn't exist
        $stmt = $this->connect()->prepare(
            "INSERT INTO Brand_Category (brand_id, category_id) 
             VALUES (?, ?)"
        );
        
        if ($stmt->execute([$brand_id, $category_id])) {
            return $this->connect()->lastInsertId();
        }
        
        return false;
    }

    public function getAllProductsWithBrandCategory() {
        $stmt = $this->connect()->prepare(
            "SELECT d.*, b.brand_name, c.category_name 
             FROM Door d
             JOIN Brand_Category bc ON d.brand_category_id = bc.brand_category_id
             JOIN Brand b ON bc.brand_id = b.brand_id
             JOIN Category c ON bc.category_id = c.category_id
             ORDER BY c.category_name, b.brand_name, d.name"
        );
        $stmt->execute();
        return $stmt->fetchAll();
    }
}