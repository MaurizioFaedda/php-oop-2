<?php
trait PasswordGenerator{
    public function setPassword($_name, $_lastname, $_age){
        return $this->default_password = $_name.$_lastname.$_age;
    }

    public function getPassword(){
        return $this->default_password;
    }
}

?>
