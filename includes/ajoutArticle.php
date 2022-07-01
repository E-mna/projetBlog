<?php
// je vérifie et je manipule mon formulaire
if (!empty($_POST)) {
  print_r($_POST);
  var_dump($_POST);
  if (
    isset($_POST['titre_article'], $_POST['catégorie'], $_POST['description'])
    && !empty($_POST['titre_article']) && !empty($_POST['catégorie']) && !empty($_POST['description'])
  ) {

    $fileToUpload = $_FILES["imgToUpload"];
    $target_file = __DIR__ . '/../uploads/' . basename($fileToUpload["name"]);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
      $check = getimagesize($fileToUpload["tmp_name"]);
      if ($check !== false) {
        echo "le fichier a du contenu - " . $check["mime"] . ".";
      } else {
        echo "le fichier est vide";
        $uploadOk = false;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "désolé, ce fichier existe deja sur le serveur.";
      $uploadOk = false;
    }

    // Check file size
    if ($fileToUpload["size"] > 500000) {
      echo "Désolé, le fichier dépasse la taille maximale autorisé";
      $uploadOk = false;
    }

    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" && $imageFileType != "svg"
    ) {
      echo "Sorry, only JPG, JPEG, PNG, GIF & SVG files are allowed.";
      $uploadOk = false;
    }

    // Check if $uploadOk is set to 0 by an error
    if (!$uploadOk) {
      echo "Le fichier ne respecte les conditions d'upload";
      // if everything is ok, try to upload file
    } else {
      //je déplace mon fichier du dossier temporaire vers son dossier définitif
      if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
        //succès
        echo "The file " . htmlspecialchars(basename($fileToUpload["name"])) . " has been uploaded.";
      } else {
        //erreur
        echo "Erreur : le déplacement du fichier est impossible";
      }
    }

    // je récupère mes données
    $img = './../uploads/' . $fileToUpload["name"];
    $title = $_POST['titre_article'];
    $catégorie = $_POST['catégorie'];
    $description = $_POST['description'];

    // je me connecte à ma BDD
    require_once "connect.php";
    // j'ecris la requete
    //$sql= "INSERT INTO articles VALUES (null, '$title', '$catégorie', '$description') ";
    $sql = "INSERT INTO articles VALUES (null, :img, :titreArticle, :categ, :descrip ,  NOW()) ";
    // je prépare la requete 
    $stmt = $pdo->prepare($sql);
    // j'injecte les valeurs à mes paramaètres
    $stmt->bindValue('img', $img, PDO::PARAM_STR);
    $stmt->bindValue('titreArticle', $title, PDO::PARAM_STR);
    $stmt->bindValue('categ', $catégorie, PDO::PARAM_STR);
    $stmt->bindValue('descrip', $description, PDO::PARAM_STR);

    //j'execute ma requete
    $stmt->execute();
    // var_dump($stmt->debugDumpParams());
  } else {
    echo (" Vous devez remplir tous les champs");
  }
}
?>



<h2 class="title ">Articles</h2>




<div class="AddArticle ">


    <form method="POST" class="info-article" action=" " enctype="multipart/form-data">
        <input class="file-input" type="file" name="imgToUpload">
        <h6>Titre de l'article :</h6>
        <input type="text" name='titre_article' class="titre-art" id="textareaTitreArticle">
        <h6>Catégorie de l'article :</h6>
        <input type="text" name="catégorie" class="cat-art" id="textareaCatArticle">

        <input name="description" cols="35" rows="10" placeholder="Ici taper votre article..."
            id="textareaArticle" /><br>
        <input type="submit" value="Valider" id="button">
    </form>
</div>