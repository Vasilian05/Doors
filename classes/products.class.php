<?php include_once 'config.php'; 

class Product extends Dbh {

   
    private $name;
    private $img;
    private $category;
    private $description;
    private $model;

    private function __construct($name, $img, $category, $description, $model){
        $this->name=$name;
        $this->img=$img;
        $this->category=$category;
        $this->description=$description;
        $this->model=$model;
    }

    

    
}