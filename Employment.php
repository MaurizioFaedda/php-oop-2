<?php

require_once 'User.php';
class Employment extends User {
    public $employment;

    function __construct($_name = "", $_lastname= "", $_employment = ""){
        parent::__construct($_name, $_lastname);
        $this->employment = $_employment;
    }

}
?>
