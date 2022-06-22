<?php 
 
$title = 'Inscription';  
require 'includes/header.php'; 
require "./includes/navbar.php";
?>
 

 

<section class="pageInscription">

<div action="" method="POST" class="card" id="myForm">
     <h1 class="h1-main">S'inscrire</h1>

        <form action=" " method="POST" class="content"  id="inscription">
                <label for="">Nom</label> <br>
                <input type="text" name="nom" placeholder="Nom" id='nom' required> <br> 
                <label for="Pseudo ">Pseudo</label> <br>
                <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo" required> <br>
                <label for="">Email</label> <br>
                <input type="email" name="email" placeholder="Email" id="email" required> <br> 
                <input type="password" name="mdp" placeholder="Mot de passe" id="motDePasse" required> <br> <br>
                <input type="submit" value="Inscription">
                <p style="color: red;" id="erreur"></p>
        </fom>
</div>

</section>


<?php
$nom =$_POST['nom'] ?? null;
$pseudo =$_POST['pseudo'] ?? null;
$email =$_POST['email'] ?? null;
$mdp =$_POST['mdp'] ?? null;
$mdp = htmlspecialchars($mdp);

// je vérifie le mdp est true et le mail soit valide
if(!is_null($mdp)&& filter_var($email, FILTER_VALIDATE_EMAIL) !== false){
        // je me connecte à la BDD
        require_once "./includes/connect.php";
        // je prépare ma requete 
        $req = $pdo->prepare("INSERT INTO utilisateurs VALUES (null, :nom, :pseudo, :mail, :mdp, NOW() )");
        //j'execute et je récupère
        $rslt = $req->execute([
             ':nom' => $nom,
             ':pseudo' => $pseudo,   
             ':mail' => $email,
             ':mdp'  => password_hash($mdp, PASSWORD_ARGON2I)
        ]);

}


?>


 
<?php
  require "./includes/footer.php";
 ?>



   