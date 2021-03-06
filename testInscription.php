<?php

    $firstname = $_POST['firstName'];
    $name = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 2;

    $hash = password_hash( $password, PASSWORD_DEFAULT);

include ('connexiondb.php');


// Requête préparée pour empêcher les injections SQL
$requeteUsers = $bdd->prepare("INSERT INTO users (FirstName, Name, Email, Hash, ID_Role) VALUES( :firstname, :name, :email, :hash, :role)");

    $requeteUsers->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $requeteUsers->bindValue(':name', $name, PDO::PARAM_STR);
    $requeteUsers->bindValue(':email', $email, PDO::PARAM_STR);
    $requeteUsers->bindValue(':hash', $hash, PDO::PARAM_STR);
    $requeteUsers->bindValue(':role', $role, PDO::PARAM_STR);



$lecture = $bdd->prepare("SELECT Email FROM users");
$lecture->execute();


$verification_mail = $lecture->fetchALL();

if($email != $verification_mail['Email'])
{
    $requeteUsers->execute();
    header("Location: index.php");
    $bdd = null;
}else {

    echo "Error";
}



 ?>



