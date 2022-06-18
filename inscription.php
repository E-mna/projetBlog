<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<?php  include 'includes/header.php'; ?>
 

<section class="pageInscription">

<div action="traitement.php" method="POST" class="card" id="myForm">
     <h1 class="h1-main">S'inscrire</h1>

        <form action=" " method="POST" class="content"  id="inscription">
                <label for="Pseudo ">Pseudo</label> <br>
                <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo"> <br>
                <label for="">Email</label> <br>
                <input type="email" name="email" placeholder="Email" id="email"> <br> 
                <input type="email" name="email-confirmation" placeholder="Confirmation de l'email" id="email2"> <br>
                <input type="password" name="motDePasse" placeholder="Mot de passe" id="motDePasse"> <br> <br>
                <input type="submit" value="Inscription">
                <p style="color: red;" id="erreur"></p>
        </fom>
</div>

</section>



<!-------- footer ---------->
<?php
  require "./includes/footer.php";
 ?>



    <script src="script.js"></script>
</body>
</html>