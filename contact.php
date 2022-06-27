<?php


$title = 'Contact';
$nav = 'contact';



require "./includes/header.php";
require "./includes/navbar.php";

?>



<section id="formContact">
  <form action="" method="post">
    <label for="">Nom :</label> <br>
    <input type="text" name="nom" placeholder="Nom"><br>
    <label for="">Prenom :</label> <br>
    <input type="text" name="prenom" placeholder="Prenom"><br>
    <label for="">Age :</label> <br>
    <input type="number" name="age" placeholder="Age"><br>
    <label for="">adresse :</label> <br>
    <input type="adresse" name="adresse" placeholder="Adresse mail"><br>
    <label for="">description :</label> <br>
    <textarea name="description" id="" cols="30" rows="10" placeholder="Taper votre message"></textarea><br>
    <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
    <input type="submit" value="Envoyer" name="envoyer">

  </form>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfGrqMgAAAAAAG1kKzvR3LN7NfQFcx6NARZAD75"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LfGrqMgAAAAAAG1kKzvR3LN7NfQFcx6NARZAD75', {
        action: 'homepage'
      }).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
      });
    });
  </script>


</section>

<?php

// On vérifie que la méthode POST est utilisée
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // On vérifie si le champ "recaptcha-response" contient une valeur
  if (count($_POST) === 0 && empty($_POST['recaptcha-response'])) {

    header('Location: acceuil.php');
  } else {
    // On prépare l'URL
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LfGrqMgAAAAALU3-tBCOSQQdI3O0DzoG8U1o5-V&response={$_POST['recaptchaResponse']}";


    //
    // On vérifie si curl est installé
    if (function_exists('curl_version')) {
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_HEADER, false);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_TIMEOUT, 1);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      $response = curl_exec($curl);
    } else {
      // On utilisera file_get_contents
      $response = file_get_contents($url);
    }

    // On vérifie qu'on a une réponse
    if (empty($response) || is_null($response)) {
      header('Location: acceuil.php');
    } else {
      $data = json_decode($response);

      if ($data->success) {
        if (
          isset($_POST['nom']) && !empty($_POST['nom']) &&
          isset($_POST['prenom']) && !empty($_POST['prenom']) &&
          isset($_POST['age']) && !empty($_POST['age']) &&
          isset($_POST['adresse']) && !empty($_POST['adresse']) &&
          isset($_POST['description']) && !empty($_POST['description'])
        ) {
          // On nettoie le contenu
          $nom = strip_tags($_POST['nom']);
          $prenon = strip_tags($_POST['prenom']);
          $age = strip_tags($_POST['age']);
          $adresse = strip_tags($_POST['adresse']);
          $message = htmlspecialchars($_POST['description']);

          // Ici vous traitez vos données

          if (isset($_POST['envoyer'])) {
            // je récupère mes données
            $nom = ucwords($_POST['nom']);
            $prenom = ucwords($_POST['prenom']);
            $age =  $_POST['age'];
            $adresse = $_POST['adresse'];
            $description = $_POST['description'];

            // je me connecte à la BDD
            require "./includes/connect.php";

            // j'ecris ma requete
            $sql = "INSERT INTO contact VALUES (null, '$nom', '$prenom', $age, '$adresse', '$description')";

            //  
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':nom', "$nom", PDO::PARAM_STR);
            $stmt->bindValue(':prenom', "$prenom", PDO::PARAM_STR);
            $stmt->bindValue(':age', "$age", PDO::PARAM_INT);
            $stmt->bindValue(':adresse', "$adresse", PDO::PARAM_STR);
            $stmt->bindValue(':description', "$description", PDO::PARAM_STR);


            $rst = $stmt->execute();

            echo "formulaire envoyé";
          }

          echo "Message de {$nom} envoyé";
        }
      } else {
        header('Location: index.php');
      }
    }
  }
}
/* else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}
 */
