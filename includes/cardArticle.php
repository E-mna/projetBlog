<?php
// AFFICHAGE ARTICLE
require_once "header.php";
// connexion à la BDD
require_once "connect.php";
// je prépare ma requete
$sql = ('SELECT * FROM articles ORDER BY date_creation DESC ');
// je prépare ma requète
$req = $pdo->prepare($sql);
//j'execute
$rst = $req->execute();

if ($rst) {
  var_dump($req->debugDumpParams());
  $data = $req->fetchAll();
}
echo "<section class='article  container-fluid'>
<div class='content row'   id='container'>
";
foreach ($data as $articles) {
  var_dump($articles);
  $dateCreation = new DateTime($articles['date_creation']);
  echo "
             <div class='card-article col-lg-6 ' id='task' >
           
                <div class='img-article'>
                    <img  src='{$articles['img']}   ' alt='img'>
                </div>
                <div class='info-article'  id='editArticle'   >
                    <h5>Titre de l'article: {$articles['titre_article']} {$articles['id']}    </h5>
       
                    <h6 id='cat'>Catégorie:{$articles['catégorie']}</h6>
                    <p id='edit'>{$articles['description']}</p> <br>
                    <p > <small>{$dateCreation->format('d/m/Y H:i a')}</small></p>
                        <form action='supprimer.php' method='POST'>
                          <input type='hidden' name='id' value='{$articles['id']}' id='editBtn'>
                          <input type='submit'  value='Supprimer l'article' class='remove'><br>
                        </form>
                        <form action='modifier.php' method='POST'>
                          <input type='hidden' name='id' value='{$articles['id']}' id='editBtn'>
                          <input type='submit'   value='Modifier l'article' id='editBtn'><br>
                        </form>
                      
                </div>
            </div>
        
  ";
}

echo '</div></section>';