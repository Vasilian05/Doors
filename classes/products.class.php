<?php include_once 'config.php'; 

class Product extends Dbh {

   
    private $name;
    private $img;
    private $category;
    private $description;

    private function __construct($name, $img, $category, $description){
        $this->name=$name;
        $this->img=$img;
        $this->category=$category;
        $this->description=$description;
    }



    
}