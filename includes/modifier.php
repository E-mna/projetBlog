<?php

 
   try {
        require_once 'connect.php';

        //je recupere l'id 
        $id = $_POST['id'] ?? false;
        $id = (int)$id;

        //si il n'est pas valide, alorsune erreur (fin d'execution)
        if ($id <= 0) {
            throw new Exception('Erreur lors de la suppression de l\'article (id)');
        }

        //je prépare ma requete
        $req = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
        // j'execute avec les parametres besoin
        $req->execute([
            ':id' => $id
        ]);


 
        $articles = $req->fetch(PDO::FETCH_ASSOC) ?? null;

         

    } catch (Exception $exception) {
        echo '
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
                <strong>Erreur!</strong> <a href="#" class="alert-link">Une erreur est survenue : ' . $exception->getMessage() . '</a> and try submitting again.
             </div>
            ';
    }


    // je récupère 
    $id = $_POST['id'] ?? false;
    $id = (int)$id;
    $title = $_POST['titre_article'] ?? false;
    $title = htmlspecialchars($title);
    $categ = $_POST['catégorie'] ?? false;
    $descrip = $_POST['description'] ?? false;
     
    
    // je vérifie l'existance
    if (strlen($title)> 0 &&  strlen($categ) > 0 && strlen($descrip) > 0){


               try{
                   // je me connecte
                   require_once 'connect.php';
                   // je prépare ma requete
                   $req = $pdo->prepare('UPDATE articles SET  titre_article = :title, catégorie = :categ, desription = :descrip , NOW() WHERE id = :id  ');
                   // j'execute
                   $req->execute([
                       
                     ':id' => $id,
                     ':titre_article' => $title,
                     ':catégorie' => $categ,
                     ':description' => $descrip,
                   ]);
                   var_dump($req->debugDumpParams());
                        echo '
                                <div class="alert alert-success" role="alert">
                                    <strong>Bravo!</strong> Article modifié avec succès !
                                    <a href="cardArticle.php" class="alert-link"> Voir tous les articles </a>.
                                </div>
                             ';
               } catch (Exception $exception) {
                 echo '
                                    <div class="alert alert-danger" role="alert">
                                            A simple danger alert—check it out!
                                                <strong>Erreur!</strong> <a href="#" class="alert-link">Une erreur est survenue : ' . $exception->getMessage() . '</a> and try submitting again.
                                    </div>
                 ';
    }   
}   
?>


<div class='card-article col-lg-6 ' id='task' >

  <form action="" method="POST" class='info-article'  id='editArticle'   >
      <div  >
            <label for=" " class="form-label">id  </label>
            <input type="text" class="form-control" id="id" name="id"  
                   value="<?php echo $articles['id'] ?> ">
        </div>
        <div  >
            <label for=" " class="form-label">Titre  </label>
            <input type="text" class="form-control" id="title_article" name="titre_article"  
                  value="<?php echo $articles['titre_article'] ?> ">
        </div>
        <div  >
            <label for=" " class="form-label">catégorie</label>
            <input type="text" class="form-control" id="catégorie" name="catégorie" 
                  value="<?php echo $articles['catégorie'] ?> ">
        </div>
        <div  >
            <label for=" " class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description"  
                   value="<?php echo $articles['description'] ?> ">
        </div>
        <input type="hidden" name="id" value="<?php echo $articles['id'] ?>">
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>


 </div>