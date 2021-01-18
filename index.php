<?php
require_once 'User.php';
require_once 'Employment.php';

$user1 = new User('Maurizio', 'Faedda');
var_dump($user1);

$employment1 = new Employment('Mario', 'Rossi', 'Studente');
var_dump($employment1);
?>
