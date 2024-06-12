<?php 
include_once 'config.php';

class User {

    private $name;
    private $company;
    private $adress;
    private $city;
    private $phone;
    private $email;
    private $pass;
    private $user_type;

    //Setters 
    public function setRegisterDetails($name, $company, $adress, $city, $phone, $email, $user_type){
        $this->name=$name;
        $this->company=$company;
        $this->adress=$adress;
        $this->city=$city;
        $this->phone=$phone;
        $this->email=$email;
        $this->user_type=$user_type;
    }

    public function setLogin($email, $pass){
        $this->pass=$pass;
        $this->email=$email;
       
    }

    private function checkEmty(){
        if($this->name == "" || $this->company == "" || $this->adress == "" || $this->city == "" ){
            //return
        }
    }
}