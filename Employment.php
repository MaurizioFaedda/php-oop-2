<?php

require_once 'User.php';
class Employment extends User {
    public $employment;

    function __construct($_name = "", $_lastname= "", $_employment = ""){
        parent::__construct($_name, $_lastname);
        $this->employment = $_employment;
    }

    public function setCheck($_age){
        if(!is_int($_age)){
            throw new Exception('Is not a number');
        } elseif ($_age < 18) {
            throw new Exception('User is not of legal age');
        }
        return $this->age = $_age;
    }
    public function getCheck(){
        return $this->age;
    }

}
?>
