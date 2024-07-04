<?php 

trait Validation {

    public function validateEmail(){
        $error_message = "";
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Невалиден имейл формат";
          }
          
        return $error_message;
    }

    public function validateName(){
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
}