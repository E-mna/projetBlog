<?php

//je récupère 
$id = $_POST['id'];
$title = $_POST['titre_article'];
$img = $_POST['$target_file'];
$categ = $_POST['catégorie'];
$descrip = $_POST['description'];
$date = $_POST['date_creation'];



//je me connecte
require_once "./../includes/connect.php";
//j'ecris ma requete1
$sql = ("INSERT INTO articles VALUES('','','','','','',)");
$req = $pdo->prepare($sql);
//j'execute
$req->execute();

echo " Article ajouté !  ";






?>



<section class='article  container-fluid'>
    <div class='content row' id='container'>


        <form action="">
            <p>Numero article : <input type="number" name="id"> </p>

            <p>Ajouter image : <input type="file" name="img"> </p>

            <p>Titre d'article : <input type="text" name="titre_article"> </p>

            <p>Catégorie : <input type="text" name="catégorie"> </p>

            <p>description : <input type="text" name="desription"> </p>

            <p>Date de création : <input type="date" name="date_creation"> </p>

            <input type="submit" value="Ajouter l'article">




        </form>

    </div>
</section>