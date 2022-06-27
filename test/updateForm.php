<?php

require_once "includes/connect.php";







?>












<section class='article  container-fluid'>
    <div class='content row'   id='container'>   


            <form action="">
                <p>Numero article : <input type="number" name="id"> </p>
                
                <p>Ajouter image : <input type="file" name="img"> </p>
                
                <p>Titre d'article : <input type="text" name="titre_article"> </p>
                
                <p>Catégorie : <input type="text" name="catégorie"> </p>
                
                <p>description : <input type="text" name="desription"> </p>
            
                <p>Date de création : <input type="date" name="date_creation"> </p>
                
                <input type="submit" value="Modifier l'article">




            </form>

     </div>
</section>