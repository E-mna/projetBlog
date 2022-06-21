<?php 
 
$title = 'Inscription';  
require 'includes/header.php'; 
require "./includes/navbar.php";
?>
 


<?php
// je me connecte à ma BDD
require_once './includes/connect.php'


?>

<section class="pageInscription">

<div action="traitement.php" method="POST" class="card" id="myForm">
     <h1 class="h1-main">S'inscrire</h1>

        <form action=" " method="POST" class="content"  id="inscription">
                <label for="">Nom</label> <br>
                <input type="text" name="nom" placeholder="Nom" id='nom'> <br> 
                <label for="Pseudo ">Pseudo</label> <br>
                <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo"> <br>
                <label for="">Email</label> <br>
                <input type="email" name="email" placeholder="Email" id="email"> <br> 
                <input type="email" name="email-cnfrm" placeholder="Confirmation de l'email" id="email2"> <br>
                <input type="password" name="mdp" placeholder="Mot de passe" id="motDePasse"> <br> <br>
                <input type="submit" value="Inscription">
                <p style="color: red;" id="erreur"></p>
        </fom>
</div>

</section>



 
<?php
  require "./includes/footer.php";
 ?>



   