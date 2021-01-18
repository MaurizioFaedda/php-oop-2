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
}
?>
