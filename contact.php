<?php


   $title = 'Contact';
   $nav = 'contact';



   require "./includes/header.php";
   require "./includes/navbar.php";

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
    // je récupère mes données
    $nom = ucwords($_POST['nom']);
    $prenom = ucwords($_POST['prenom']);
    $age =  $_POST['age'];
    $adresse = $_POST['adresse'];
    $description = $_POST['description'];

    // je me connecte à la BDD
    require "./includes/connect.php";
   
   // j'ecris ma requete
   $sql = "INSERT INTO contact VALUES (null, '$nom', '$prenom', $age, '$adresse', '$description')";

  //  
   $stmt = $pdo->prepare($sql);  
    
   $stmt->bindValue(':nom', "$nom", PDO::PARAM_STR);
   $stmt->bindValue(':prenom', "$prenom", PDO::PARAM_STR);
   $stmt->bindValue(':age', "$age", PDO::PARAM_INT);
   $stmt->bindValue(':adresse', "$adresse", PDO::PARAM_STR);
   $stmt->bindValue(':description', "$description", PDO::PARAM_STR);


   $rst = $stmt->execute();

   echo $stmt->debugDumpParams();
   echo "formulaire envoyé";
  
  }


   