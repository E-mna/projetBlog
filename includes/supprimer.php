<?php

try{
    // se connecter à la BDD
    require_once "./includes/connect.php" ;
    //je récupère
    $id = $_POST['id_article'] ?? false;
    $id = (int)$id;
    // je verifie
    //je prépare ma requète
    $req = $pdo->prepare('DELETE FROM articles where id= :id ');
    // j'execute ma requete et j'associe les paramètres
     $req->execute([
      //var_dump($req->debugDumpParams()); 
        ':id' => $id ,
    ]);
      echo '
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Bravo!</strong> Article créer avec succès 
              <a href="pageArticle.php" class="alert-link"> Afficher la liste </a>.
            </div>
            ';
     
     } catch (PDOException|DomainException $Exception){
            echo '
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Erreur!</strong> <a href="#" class="alert-link">Une erreur est survenue : '.$Exception->getMessage().'
            </a> and try submitting again.
            </div>
            ';
        }
    

 