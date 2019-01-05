<?php

//connexion à la base de donnée

try {
     
 $connect=new PDO('mysql:host=localhost;dbname=minichat;charset=utf8','root','Harlequin2501');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
//insertion du message à l'aide d'une requête préparée

$stmt = $connect->prepare("INSERT INTO messages (pseudo, message, date_ajout) VALUES(:pseudo, :message, NOW())");
$stmt->execute(array('pseudo'=>$_POST['pseudo'], 'message'=>$_POST['message']));

//Redirection du visiteur vers la page du minichat
header('Location : formulaire.php');
?>