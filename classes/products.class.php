<?php include_once 'config.php'; 

class Product extends Dbh {

   
    private $name;
    private $category;
    private $description;
    private $image;
    private $allowedExtensions = array('jpg', 'jpeg', 'png', 'WEBP');
    private $maxFileSize = 500000; // 500KB

    public function __construct($name, $category, $description, $image){
        $this->name=$name;
        $this->category=$category;
        $this->description=$description;
        $this->image=$image;

    }

    public function uploadImage() {
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

            if($this->category == "interior"){
                $targetDir = "interior_img/";
            }else{
                $targetDir = "exterior_img/";
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
    public function getCategory(){
        if($this->category == "interior"){
            //call method to import images in interior folder here
        }else{
            //call method to import images in exterior folder here
        }


    }

    //get the image and put it in the folder
    //import the image path to the database

    //import the name of the door 
    private function insertValues($file){

        $stmt = $this->connect()->prepare('INSERT INTO Doors(category_id, name, description, image) VALUES(?, ?, ?, ?)');

        if($stmt->execute($this->category, $this->name, $this->description, $file)){
            echo "Продуктът е качен успешно!";
        }else{
            echo "Продуктът не е качен";
        }

    }

    //import the description



    
}