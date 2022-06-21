<?php
require_once "./header.php";
// connexion à la BDD
require_once "./connect.php";
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
                        <form action='./includes/supprimer.php' method='POST'>
                          <input type='hidden' name='id' value='{$articles['id_article']}' id='editBtn'>
                          <input type='button' value='Supprimer l'article' class='remove'><br>
                        </form>
                        <form action='./includes/modifier.php' method='POST'>
                          <input type='hidden' name'id' value='{$articles['id_article']}' id='editBtn'>
                          <input type='button' value='Modifier l\'article' id='editBtn'><br>
                        </form>

                      
                </div>
            </div>
        
  " ;
}

echo '</div></section>';
?>













<hr>




<section class="article  container-fluid" >
  
        <div class="content row  "   id="container">

             <div class="card-article col-lg-6 " id="task" >
           
                <div class="img-article"  >
                    <img src="images/maj.webp" alt="img">
                </div>
                <div class="info-article"  id="editArticle"   >
                    <h5 id="title" name=  >Titre de l'article</h5>
                    <h6 id="cat" >Catégorie: Nature</h6>
                    <p id="edit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quis rem maiores officia obcaecati omnis placeat saepe blanditiis recusandae, nesciunt unde laborum architecto nobis, asperiores veritatis dolore, aut odio dignissimos.</p> <br>
                        <input type="button" value="Supprimer l'article" class="remove"><br>
                        <input type="button" value="Modifier l'article" id="editBtn"><br>
                        <input type="button" value="Sauvegarder" id="saveBtn" >
                </div>
            </div>
            
               

             <div class="card-article col-lg-6 " id="task">
                <div class="img-article"   >
                    <img src="images/4.jpeg" alt="lo">
                </div>
                <div class="info-article"  id="editArticle"   >
                     <h5 id="title" >Titre de l'article</h5>
                     <h6 id="cat" class="remove">Catégorie: Nature</h6>
                     <p id="edit" class="remove" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quis rem maiores officia obcaecati omnis placeat saepe blanditiis recusandae, nesciunt unde laborum architecto nobis, asperiores veritatis dolore, aut odio dignissimos.</p> <br>
                        <input type="button" value="Supprimer l'article" class="remove"><br>
                        <input type="button" value="Modifier l'article" id="editBtn"><br>
                        <input type="button" value="Sauvegarder" id="saveBtn" >
                </div>
            </div>
            

            <div class="card-article col-lg-6"  id="task" >
                <div class="img-article">
                    <img src="images/2.webp" alt="lo">
                </div>
                <div class="info-article"  id="editArticle" >
                     <h5 id="title">Titre de l'article</h5>
                     <h6 id="cat" >Catégorie: commerce</h6>
                    <p id="edit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et magnam fugit voluptatibus esse illum repellat maiores, quaerat error voluptas! Quidem voluptates deserunt eveniet placeat labore. Temporibus unde ex explicabo recusandae.
                        </p><br>
                         <input type="button" value="Supprimer l'article" class="remove"><br>
                        <input type="button" value="Modifier l'article" id="editBtn"><br>
                        <input type="button" value="Sauvegarder" id="saveBtn" >
                </div>
            </div>

            <div class="card-article col-lg-6" id="task">
                <div class="img-article"  id="editArticle" >
                    <img src="images/6.jpeg" alt="lo">
                </div>
                <div class="info-article">
                     <h5 id="title">Titre de l'article</h5>
                     <h6 id="cat">Catégorie: mécanique</h6>
                    <p id="edit">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa at libero iusto corrupti! Quidem expedita doloremque corporis iusto eveniet velit earum tempora! Et doloremque aliquid ullam cum, excepturi magnam vero!  </p> <br>
                     <input type="button" value="Supprimer l'article" class="remove"><br>
                     <input type="button" value="Modifier l'article" id="editBtn"><br>
                        <input type="button" value="Sauvegarder" id="saveBtn" >
                </div>
            </div>

            <div class="card-article col-lg-6" id="task">
                <div class="img-article"  id="editArticle" >
                    <img src="images/i.jpeg" alt="lo">
                </div>
                <div class="info-article">
                     <h5 id="title">Titre de l'article</h5>
                     <h6 id="cat">Catégorie: mécanique</h6>
                    <p id="edit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident maxime fugit neque perspiciatis saepe consequatur, inventore ullam officia cumque magni assumenda ad voluptate sit cupiditate. Labore sunt quidem accusamus odit.</p><br>
                       <input type="button" value="Supprimer l'article" class="remove"><br>
                       <input type="button" value="Modifier l'article" id="editBtn"><br>
                        <input type="button" value="Sauvegarder" id="saveBtn" >
                </div>
            </div>  

            
        </div>
</section>
