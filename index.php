<?php
require_once 'User.php';
require_once 'Employment.php';

$user1 = new User('Maurizio', 'Faedda');
try {
    $user1 -> setEmail('mauriziogmail.com');
    $mail =  $user1->getEmail();
} catch (Exception $e){
    echo $user1->name ." ". $user1->lastname."'s ".$e->getMessage();
}

var_dump($user1);


$employment1 = new Employment('Mario', 'Rossi', 'Studente');
var_dump($employment1);
?>
