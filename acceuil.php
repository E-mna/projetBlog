<?php
$title = 'Acceuil';
$nav = 'index';


require "includes/header.php";
require "includes/navbar.php";

?>



<!-- <pre>
<?php print_r($_SERVER)  ?>
</pre>
  -->


<section class="container">
    Bienvenue votre blog Alapajo
</section>






<!------ Cates des articles ------->
<?php

require "./includes/cardArticle.php";
require "./includes/footer.php";
?>