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
        $req = $pdo->prepare('DELETE FROM articles WHERE id = :id');
        // j'execute avec les parametres besoin
        $req->execute([
            ':id' => $id
        ]);

         

    } catch (Exception $exception) {
        echo '
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
                <strong>Erreur!</strong> <a href="#" class="alert-link">Une erreur est survenue : ' . $exception->getMessage() . '</a> and try submitting again.
             </div>
            ';
    }






?>