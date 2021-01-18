<?php
class User {
    public $name;
    public $lastname;
    public $mail;
    public $age;

    function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;

    }

    public function setCheck($_mail){
        if (!filter_var($_mail, FILTER_VALIDATE_EMAIL)) {

          throw new Exception('Is not a valid email');
        }

        return $this->mail = $_mail;
    }

    public function getCheck(){
        return $this->mail;
    }
}
?>
