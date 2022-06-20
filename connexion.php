<?php $title = 'Connexion'  ?>
 

<body>
 
   <?php
  require "./includes/header.php";
 ?>
 

<section class="pageConnexion">

<div class="card">
        <div class="image">
            <h1 class="h1-main">Se connecter</h1>
        </div>
        <div class="content"  id="connexion">
            
            <div class="form-group">
                <label for="">Pseudo</label>
                <br>
                <input type="text" name="pseudo" placeholder="Pseudo" id="pseudo"> <br>

            </div>
            <div class="form-group">
                <label for="">Email</label>
                <br>
                <input type="email" name="email" placeholder="Email" id="email"> <br> 
                 
            </div>
            <input type="password" name="motDePasse" placeholder="Mot de passe" id="motDePasse"> <br>
            <br>
             <input type="submit" value="Se connecter">
        </div>
    </div>

 
<p style="color: red;" id="erreur"></p>

</section>



<!-------- footer ---------->
<?php
  require "./includes/footer.php";
 ?>

    <script src="script.js"></script>
</body>
</html>