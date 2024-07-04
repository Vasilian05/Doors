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

    public function sendMail(){
        $mailTo = "artdecordoors@gmail.com";
        $headers = "From: ".$this->name;
        $txt = "Получихте имейл от ".$this->name.".\n\n".$this->message;

        mail($mailTo, $this->about, $txt, $headers);
    }

}