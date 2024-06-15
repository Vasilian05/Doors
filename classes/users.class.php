<?php 
include_once 'config.php';

class User extends Dbh {

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

    public function setPass($pass){
        $this->pass=$pass;
    }

    public function setLogin($email, $pass){
        $this->pass=$pass;
        $this->email=$email;
       
    }

    private function checkEmty(){// make sure fields are not empty
        if($this->name == "" || $this->company == "" || $this->adress == "" || $this->city == "" || $this->phone == "" || $this->email = "" || $this->user_type == ""){
            return false;
        }else{
            return true;
        }
    }


    private function validateName(){
        $error_message = "";
        if(ctype_alpha($this->name)){// check for digits or symbols

            if( strlen($this->name) >= 3 && strlen($this->name)< 24){   //length check
                
                return $error_message;
            }else{
                //if length is not valid
                $error_message = "Името не може да е по-малко от 3 букви или повече от 24 букви";
            }
        }else{
            //if name contains digits/symbols
            $error_message = "Име не може да съдържа цифри или символи";
        }
        return $error_message;
    }

    private function validateCompany(){
        $error_message = "";
        if(strlen($this->company) > 50 || strlen($this->company) < 3 ){
            //if its too long or too short
            $error_message = "Името на компанията трябва да е повече от 3 букви и по-малко от 50";
        }
        return $error_message;
    }

    private function validateCity(){
        $error_message = "";
        if(strlen($this->city) < 3 || strlen($this->city) > 24){
            $error_message = "Името на града не може да е повече от 24 или по-малко 3 букви";
        }else{
            if(!ctype_alpha($this->city)){
                $error_message = "Името на града не може да съдържа цифри или символи";
            }
        }
        return $error_message;
    }

    private function validateEmail(){
        $error_message = "";
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Невалиден имейл формат";
          }
        return $error_message;
    }

    private function signUser(){
        if($this->user_type == "distributor"){

            //of the type is distributor, make the distrinuter equal true and admin false
            $distributer = 1;
            $admin = 0;
        }else{

            //if the type is not distributer make admin equal true 
            $distributer = 0;
            $admin = 1;
        }

        $stmt = $this->connect()->prepare("INSERT INTO User(name, company, adress, city, phone, email, is_admin, is_distributor, pass) VALUES (?,?,?,?,?,?,?,?,?)");

        //execute statement for insering user values 
        if($stmt->execute([$this->name, $this->company, $this->adress, $this->city, $this->phone, $this->email, $admin, $distributer, $this->pass])){
            $stmt = null;
            return true;
        }else{
            $stmt = null;
            return false;
        }
    }

    private function hashPass(){
        $this->pass = password_hash($this->pass, PASSWORD_BCRYPT);
    }

    public function AddUser(){
        $errors = 
            [
                'empty' => "",
                'name' => "",
                'company' => "",
                'adress' => "",
                'city' => "",
                'email' => "",

            ];

            if(!$this->checkEmty()){
                $errors['empty'] = "Всички полета трябва да бъдат попълнени";
            }
            if($this->validateName() != ""){
                $errors['name'] = $this->validateName();
            }
            if($this->validateCompany() != ""){
                $errors['company'] = $this->validateCompany();
            }
            if($this->validateCity() != ""){
                $errors['city'] = $this->validateCity();
            }
            if($this->validateEmail() != ""){
                $errors['email'] = $this->validateEmail();
            }

            if($errors['empty'] == "" && $errors['name'] == "" && $errors['company'] == "" && $errors['city'] == "" && $errors['city'] == "" && $errors['email'] == ""){
                $this->hashPass();
                $this->signUser();
            }else{
                return $errors;
            }
    }

}