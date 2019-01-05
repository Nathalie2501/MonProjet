<?php
$error = array();
$messages = array();
$pseudo = "";
$message = "";
$jour = date('d');
$mois = date ('m');
$annee = date ('y');
$heure = date('H');
$minute = date('i');


        
try {
     
 $connect=new PDO('mysql:host=localhost;dbname=minichat;charset=utf8','root','Harlequin2501');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
// Récupération des 10 derniers messages
$reponse = $connect->query('SELECT pseudo, message, DATE_FORMAT(date_ajout, \'%d/%m/%Y à %Hh%imin%ss\') AS date_ajout FROM minichat ORDER BY ID DESC LIMIT 0, 10');
 
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p>' . '<em>' . htmlspecialchars($donnees['date_ajout']) . '</em>' . '        :        '. '<strong>'. htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}   



$reponse->closeCursor();

?>
</body>
</html>

//$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connect->prepare("INSERT INTO messages (pseudo, message) VALUES(:pseudo, :message, NOW())");
$stmt->execute(array('pseudo'=>$_POST['pseudo'], 'message'=>$_POST['message']));

echo $_POST['pseudo'];
echo $_POST['message'];
    
    //if($statement->execute());
        //$messages = $statement->fetchAll(PDO::FETCH_OBJ);
    
        
            //Vérification des variables qui contiennent les données du formulaire
        
        



       

//réinitialise les champs

            $pseudo = '';
            $message = '';
            


//redirige vers un autre fichier (une autre page)
//header('location:index.php')
 //}
//}
//{catch(Exception $e){
    
  //  echo $e->getTraceAsString(); 
    
//}          
  
?>



<!DOCTYPE html>
<html>
<head>	   

    <title>Minichat</title>
    <link type="text/css" rel="stylesheet"
        media="all" href="css/style"/>


   <!-- <meta http-equiv="Contact-type" content="text/html; charset-8"/> 
    <link rel="stylesheet" type="text/css" href="css/style.css">-->

</head>

<body>
    <h1>Votre avis nous intéresse</h1>
    <div class="error">
    <div id="topbar">
        <div class="content">
            <div class="wrap content">
                <h1><a href="" title=""->Mini-chat<span></span></a></h1>
            </div>
        </div>
            </div>
        </div>
        <div class="content">
            <div id="main">
                <div class="padding">
                    <h3>S'inscrire</h3>

                    <form method="POST" action='formulaire.php'>

                        
Votre pseudo : <input type="text" name="pseudo" /><br />
Votre message : <input type="text" name="message" /><br />
<input type="submit" value="Envoyer" />
                        
Votre email : <input type="text" name="email" /><br/>


                        


</form> 

<?php 

$statement = $connect->prepare('SELECT pseudo, message, DATE_FORMAT(date, \'%d/%m/%y à %Hh%imin%ss\') AS date_fr FROM messages ORDER BY ID DESC LIMIT 0, 10');

while ($repReq = $statement->fetch())
{
   echo $repReq['pseudo'], $repReq['message'];
    /*echo $_POST['pseudo'];
    echo "_" . $_POST['message'];*/
}
?>


</body>

</html>

