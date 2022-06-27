<?php

 
   try {
        require_once 'connect.php';

        //je recupere l'id 
        $id = $_POST['id'] ?? false;
        $id = (int)$id;

        var_dump($_POST);

        //si il n'est pas valide, alorsune erreur (fin d'execution)
        if ($id <= 0) {
            throw new Exception('Erreur lors de la modification de l\'article (id)');
        }

        //je prépare ma requete
        $req = $pdo->prepare('select * FROM articles WHERE id = :id');
        // j'execute avec les parametres besoin
        $req->execute([
            ':id' => $id
        ]);
 
        //$articles = $req->fetch(PDO::FETCH_ASSOC) ?? null;
        $articles = $req->fetch();

         var_dump($articles);

    } catch (Exception $exception) {
        echo '
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
                <strong>Erreur!</strong> <a href="#" class="alert-link"> hacfhjze Une erreur est survenue : ' . $exception->getMessage() . '</a> and try submitting again.
             </div>
            ';
    }


    // je récupère les nfos du formulaire
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
                   // je prépare ma requete avec des variables "SQL"
                   $req = $pdo->prepare('UPDATE articles SET  titre_article = :title, catégorie = :categ, description = :descrip, date_creation = NOW() WHERE id = :id  ');
                   // j'execute
                   $req->execute([
                     //j'associe les variables formulaire aux variables sql
                     ':id' => $id,
                     ':title' => $title,
                     ':categ' => $categ,
                     ':descrip' => $descrip,
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
<div class="modArticle ">
                <form action="modifier.php" method="POST"  class="info-article" >
                    <h6>Titre de l'article :</h6>
                    <input type="text" name='titre_article' class="titre-art" id="textareaTitreArticle"value="<?php echo $articles['titre_article'] ?> " >
                     <h6>Catégorie de l'article :</h6>
                     <input type="text" name="catégorie" class="cat-art" id="textareaCatArticle" value="<?php echo $articles['catégorie'] ?> ">
                     <h6>Choisir une photo</h6>
                    <input type="file" value="Ajouter une image" id="addImage"  > 
                    <input   name="description"  cols="35" rows="10" placeholder="Ici taper votre article..." id="textareaArticle"  value="<?php echo $articles['description'] ?> "> /><br>
                    <input type="hidden" name="id" value="<?php echo $articles['id'] ?>">
                    <input type="submit" value="update"  id="button" >
                </form>
            </div>


 </div>


 