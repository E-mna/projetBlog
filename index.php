<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
    <title>Mon Blog</title>
</head>


<body>
    
<!------ navbar  ------->
<?php
  require "./includes/header.php";
 ?>
 

<section class="container">
Bienvenue votre blog Alapajo
</section>

 
<!------ Cates des articles ------->
<?php
  require "./includes/cardArticle.php";
 ?>
 
 <!-------- footer ---------->
 <?php
  require "./includes/footer.php";
 ?>
 
 
     <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>