<?php
require_once 'User.php';
require_once 'Employment.php';


$user1 = new User('Maurizio', 'Faedda');
try {
    $user1 -> setCheck('maurizio@gmail.com');
    $mail_user1 =  $user1->getCheck();
} catch (Exception $e){
    echo $user1->name ." ". $user1->lastname."'s ".$e->getMessage();
}
echo "Name: ".$user1->name .'<br>';
echo "Lastname: ".$user1->lastname .'<br>';
echo "Email: ".$user1->mail;
var_dump($user1);


$employment1 = new Employment('Mario', 'Rossi', 'Studente');
$name_em1 = $employment1->name;
$lastname_em1 = $employment1->lastname;
try {
    $employment1 -> setCheck(18);
    $age_em1 =  $employment1->getCheck();
} catch (Exception $e){
    echo $e->getMessage();
}
$employment1 -> setPassword($name_em1, $lastname_em1, $age_em1);

$default_password = $employment1->getPassword();
echo "Name: ". $name_em1 .'<br>';
echo "Lastname: ". $lastname_em1 .'<br>';
echo "Age: ".$age_em1 .'<br>';
echo "Password: ". $default_password .'<br>';
var_dump($employment1);
?>
