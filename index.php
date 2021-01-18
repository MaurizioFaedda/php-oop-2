<?php
require_once 'User.php';
require_once 'Employment.php';

$user1 = new User('Maurizio', 'Faedda');
try {
    $user1 -> setCheck('maurizio@gmail.com');
    $mail =  $user1->getCheck();
} catch (Exception $e){
    echo $user1->name ." ". $user1->lastname."'s ".$e->getMessage();
}
echo "Name: ".$user1->name .'<br>';
echo "Lastname: ".$user1->lastname .'<br>';
echo "Email: ".$user1->mail;
var_dump($user1);


$employment1 = new Employment('Mario', 'Rossi', 'Studente');
try {
    $employment1 -> setCheck(18);
    $age =  $employment1->getCheck();
} catch (Exception $e){
    echo $e->getMessage();
}
var_dump($employment1);
?>
