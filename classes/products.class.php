<?php include_once 'config.php'; 

class Product extends Dbh {
    private $name;
    private $price;
    private $brand_id;
    private $category_id;
    private $description;
    private $image;
    private $short_description;
    private $allowedExtensions = array('jpg', 'jpeg', 'png', 'WEBP');
    private $maxFileSize = 500000; // 500KB

    public function __construct($name, $brand_id, $category_id, $description, $image, $short_description) {
        $this->name = $name;
        $this->brand_id = $brand_id;
        $this->category_id = $category_id;
        $this->description = $description;
        $this->short_description = $short_description;

        if (is_array($image) && isset($image['name'])) {
            $this->image = $image;
        } else {
            $this->image = null;
        }
    }
    private function checkEmpty(){
        if($this->name == "" || $this->category_id == "" || $this->description == "" || $this->short_description == ""){
            return "Всички полета трябва да бъдат попълнени";
        }
    }

    private function getCategory(){

        if ($this->category_id == "interior") {
            return 1;
        }else if ($this->category_id == "exterior") {
            return 2;
        }else{
            return 3;
        }
    }

    private function uploadImage() {
        $errors = array();

        // Validate file type
        $fileExtension = pathinfo($this->image['name'], PATHINFO_EXTENSION);
        if (!in_array($fileExtension, $this->allowedExtensions)) {
            $errors[] = "Само JPG, JPEG, PNG, и WEBP формати са позволени";

        }

        // Validate file size
        if ($this->image['size'] > $this->maxFileSize) {
            $errors[] = "Размерът на файла е твърде голям, максимумът е 500KB.";
        }

        // Check for errors
        if (empty($errors)) {

            if($this->category_id == "interior"){
                $targetDir = "interior_img/";
            }elseif($this->category_id == "exterior"){
                $targetDir = "exterior_img/";
            }else{
                $targetDir = "facing_img/";
            }
            
            $targetFile = $targetDir . basename($this->image['name']);
            if (move_uploaded_file($this->image['tmp_name'], $targetFile)) {
                return $targetFile; // Return the path to the uploaded file
            } else {
                $errors[] = "Sorry, there was an error uploading your file.";


            }
        }

        return $errors; // Return an array of errors
    }

    
    //check if the door is interior or exterior

    //query to insert all values in the database 
    private function insertValues($image_path){

        if($this->category_id != "facing"){

            $stmt = $this->connect()->prepare('INSERT INTO Door(category_id, name, description, image, short_description) VALUES(?, ?, ?, ?, ?)');
            
            if($stmt->execute([$this->getCategory(), $this->name, $this->description, $image_path, $this->short_description])){
                echo "Продуктът е качен успешно!";
            }else{
                echo "Продуктът не е качен";
            }
        }else {
            $stmt = $this->connect()->prepare('INSERT INTO Facing(category_id, name, description, image, short_description) VALUES(?, ?, ?, ?)');
            
            if($stmt->execute([$this->getCategory(), $this->name, $this->description, $image_path, $this->short_description])){
                echo "Продуктът е качен успешно!";
            }else{
                echo "Продуктът не е качен";
            }
        }
        
    }

    private function getBrandCategoryId() {
        // Check if brand-category relationship exists
        $stmt = $this->connect()->prepare(
            "SELECT brand_category_id FROM Brand_Category 
             WHERE brand_id = ? AND category_id = ?"
        );
        
        if ($stmt->execute([$this->brand_id, $this->category_id])) {
            $result = $stmt->fetch();
            if ($result) {
                return $result['brand_category_id'];
            }
        }
        
        // Create new brand-category relationship if it doesn't exist
        $stmt = $this->connect()->prepare(
            "INSERT INTO Brand_Category (brand_id, category_id) VALUES (?, ?)"
        );
        
        if ($stmt->execute([$this->brand_id, $this->category_id])) {
            return $this->connect()->lastInsertId();
        }
        
        throw new Exception("Failed to create brand-category relationship");
    }

    //check validations and insert products in DB 
    public function addItem(){

        $errors = [];
        $image_path = $this->uploadImage();
        if($image_path == null){
            array_push($errors, "Размерът на файла е твърде голям или е в непозволен формат");
        }
        if($this->checkEmpty() != ""){
            array_push($errors, $this->checkEmpty());
        }
        
        //if there's no errors inser the door in DB
        if(empty($errors)){
            $this->insertValues($image_path);
        }
    }

    public function getDoor($id){

        //get door from db
        $stmt = $this->connect()->prepare("SELECT * FROM Door WHERE door_id = ?");

        if($stmt->execute([$id])){
            //if statemet is successful
            $item = $stmt->fetchAll();
            $stmt = null;
            return $item;
        }else{
            //if statement fails return false
            $stmt = null;
            return false;
        }
    }

    public function editDoor($id, $price) {
        // Validate inputs
        if (empty($id) || !is_numeric($id)) {
            throw new Exception("Invalid door ID");
        }
        
        if (!is_numeric($price)) {
            throw new Exception("Price must be a number");
        }
        
        // Store the price in the object
        $this->price = $price;
        
        try {
            $stmt = $this->connect()->prepare("UPDATE Door SET 
                name = ?, 
                price = ?, 
                description = ?, 
                category_id = ?, 
                short_description = ? 
                WHERE door_id = ?");
                
            $success = $stmt->execute([
                $this->name, 
                $this->price, 
                $this->description, 
                $this->getCategory(), 
                $this->short_description, 
                $id
            ]);
            
            $stmt = null;
            
            if ($success) {
                return true;
            } else {
                throw new Exception("Database update failed");
            }
            
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            throw new Exception("Failed to update door: " . $e->getMessage());
        }
    }

}