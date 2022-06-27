<?php
// je vérifie et je manipule mon formulaire
if (!empty($_POST)){
  print_r($_POST);
  var_dump($_POST);
    if(
      isset($_POST['titre_article'], $_POST['catégorie'], $_POST['description'])
      && !empty($_POST['titre_article']) && !empty($_POST['catégorie']) && !empty($_POST['description'])
    ){
       // je récupère mes données
       $title = $_POST['titre_article'];
       $catégorie = $_POST['catégorie'];
       $description = $_POST['description'];
       // je me connecte à ma BDD
       require_once "connect.php";
       // j'ecris la requete
       //$sql= "INSERT INTO articles VALUES (null, '$title', '$catégorie', '$description') ";
       $sql= "INSERT INTO articles VALUES (null, :titreArticle, :categ, :descrip , NOW()) ";
       // je prépare la requete 
       $stmt = $pdo->prepare($sql);
       // j'injecte les valeurs à mes paramaètres
       $stmt->bindValue(':titreArticle', $title, PDO::PARAM_STR);
       $stmt->bindValue(':categ', $catégorie, PDO::PARAM_STR);
       $stmt->bindValue(':descrip', $description, PDO::PARAM_STR);
       //j'execute ma requete
       $stmt->execute();
       var_dump($stmt->debugDumpParams());
    }else{
      echo (" Vous devez remplir tous les champs");
    }
} 
?>



 <h2 class="title ">Articles</h2>
    
           <div class="AddArticle ">
                <form action="ajoutArticle.php" method="POST"  class="info-article" >
                    <h6>Titre de l'article :</h6>
                    <input type="text" name='titre_article' class="titre-art" id="textareaTitreArticle">
                     <h6>Catégorie de l'article :</h6>
                     <input type="text" name="catégorie" class="cat-art" id="textareaCatArticle">
                     <h6>Choisir une photo</h6>
                    <input type="file" value="Ajouter une image" id="addImage"  > 
                    <input   name="description"  cols="35" rows="10" placeholder="Ici taper votre article..." id="textareaArticle" /><br>
                    <input type="submit" value="Valider"  id="button" >
                </form>
            </div>