<?php 
include_once 'classes/validation.trait.php';

class Form {
    private $name;
    private $email;
    private $about;
    private $message;

    //use trait 
    use Validation;

    public function __construct($name, $email, $about, $message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->about=$about;
        $this->message=$message;
    }
    private function validateName(){
        if(strlen($this->name) < 3 || strlen($this->name) > 21){
            return false;
        }
        if(!ctype_alpha($this->name)){
            return false;
        }

        return true;
    }


}