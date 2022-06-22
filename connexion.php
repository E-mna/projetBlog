<?php 


$title = 'Connexion'; 
 
  require_once "./includes/header.php";
  require_once "./includes/navbar.php";
?>
 

<section class="pageConnexion">

<div class="card">
        <div class="image">
            <h1 class="h1-main">Se connecter</h1>
        </div>
        <div class="content"  id="connexion">
            
            <form class="form-group" method="POST">
                <label for="">Pseudo</label><br>
                <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo"> <br>
                <label for="">Mot de passe</label><br>
                 <input type="password" name="mdp" placeholder="Mot de passe" id="motDePasse">
                 <input type="submit" value="Se connecter">
           </form> <br>
             

        </div>
    </div>

 
<p style="color: red;" id="erreur"></p>

</section>


<?php
 

$pseudo =$_POST['pseudo'] ?? null;
$mdp =$_POST['mdp'] ?? null;
$mdp = htmlspecialchars($mdp);

// je vérifie le mdp est true et le pseudo soit valide
if(!is_null($mdp) && !is_null($pseudo)) {
  // je me connecte à la BDD
  require_once "./includes/connect.php";
  // je prépare ma requete 
  $req = $pdo->prepare("SELECT * FROM utilisateurs  WHERE pseudo = :pseudo");
  //j'execute et je récupère
  $req->execute([
    ':pseudo' => $pseudo,   
  ]);
  // si je trouve mon utilisateur en BDD 
  if($req->rowCount()=== 1){
    //je le lie à ma var $user
    $user = $req->fetch();

    //si le mdp eqt identique
    if(password_verify($mdp, $user['mdp'])){
      session_start();
      $_SESSION['utilisateurs']= $user;
      var_dump($_SESSION);
    } else {
      throw new Exception("erreur avec ton mdp");
    }
  }  else {
    throw new Exception("erreur avec ton pseudo");
  }
}



?>