<?php
require_once "header.php";
// connexion à la BDD
require_once "connect.php";
// je prépare ma requete
$sql =('SELECT * FROM articles  ');
// je prépare ma requète
$req = $pdo->prepare($sql); 
//j'execute
$rst = $req->execute();

if ($rst){
    var_dump($req->debugDumpParams());
    $data =$req->fetchAll();
}
echo "<section class='article  container-fluid'>
<div class='content row'   id='container'>
";
foreach($data as $articles){
   echo"
             <div class='card-article col-lg-6 ' id='task' >
           
                <div class='img-article'>
                    <img src='images/maj.webp' alt='img'>
                </div>
                <div class='info-article'  id='editArticle'   >
                    <h5 id='title' >Titre de l'article: {$articles['titre_article']} </h5>
                    <h6 id='cat'>Catégorie:{$articles['catégorie']}</h6>
                    <p id='edit'>{$articles['description']}</p> <br>
                        <form action='supprimer.php' method='POST'>
                          <input type='hidden' name='id' value='{$articles['id_article']}' id='editBtn'>
                          <input type='button' value='Supprimer l'article' class='remove'><br>
                        </form>
                        <form action='modifier.php' method='POST'>
                          <input type='hidden' name'id' value='{$articles['id_article']}' id='editBtn'>
                          <input type='button' value='Modifier l\'article' id='editBtn'><br>
                        </form>
                      
                </div>
            </div>
        
  " ;
}

echo '</div></section>';
?>









 