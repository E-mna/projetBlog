<?php 
$title = 'Acceuil';   
$nav = 'index' ;

?>
<!-- 
<pre>
<?php  print_r($_SERVER)  ?>
</pre>
 -->

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