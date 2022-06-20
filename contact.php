<?php $title = 'Contact'  ?>
<?php $nav = 'contact'  ?>



<!------ navbar  ------->
<?php
  require "./includes/header.php";
 ?>
 


 <?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);
 
$dsn ='mysql:dbname=blog;host=localhost;port=8889;charset=utf8';
$user ="blog";
$pwd='vu5G9yFa8WAWTxQe';

$pdo = new PDO($dsn, $user, $pwd, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

 
if ($dsn){
  echo' connexion reussi à la base de données';
}else{
  echo' Pas de connexion à la base de données';
}
?>




<section id="formContact">
 <form action="" method="post">
   <label for="">Nom :</label> <br>
   <input type="text" name="nom" placeholder="Nom"><br>
   <label for="" >Prenom :</label> <br>
   <input type="text" name="prenom" placeholder="Prenom"><br>
   <label for="">Age :</label> <br>
   <input type="number" name="age" placeholder="Age"><br>
   <label for="">adresse :</label> <br>
   <input type="adresse" name="adresse" placeholder="Adresse mail"><br>
   <label for="">description :</label> <br>
   <textarea name="description" id="" cols="30" rows="10" placeholder="Taper votre message"></textarea><br>
   <input type="submit" value="Envoyer" name="envoyer">
 </form>


 </section>



 <?php
  
  if(isset($_POST['envoyer']))
  {
    $nom = ucwords($_POST['nom']);
    $prenom = ucwords($_POST['prenom']);
    $age =  $_POST['age'];
    $adresse = $_POST['adresse'];
    $description = $_POST['description'];

   $sql = "INSERT INTO contact VALUES (null, '$nom', '$prenom', $age, '$adresse', '$description')";

   $stmt = $pdo->prepare($sql);  
    
   $stmt->bindValue(':nom', "$nom", PDO::PARAM_STR);
   $stmt->bindValue(':prenom', "$prenom", PDO::PARAM_STR);
   $stmt->bindValue(':age', "$age", PDO::PARAM_INT);
   $stmt->bindValue(':adresse', "$adresse", PDO::PARAM_STR);
   $stmt->bindValue(':description', "$description", PDO::PARAM_STR);


   $rst = $stmt->execute();

   echo $stmt->debugDumpParams();
 
  
  }


?>

   