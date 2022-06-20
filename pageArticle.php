 
<?php $title = 'Articles'  ?>
<?php $nav = 'articles'  ?>




<body>


 <?php
  require "./includes/header.php";
 ?>
 


    </section>



     <h2 class="title ">Articles</h2>
    
           <div class="AddArticle ">
                <form class="info-article" >
                    <h6>Titre de l'article :</h6>
                    <input type="text" class="titre-art" id="textareaTitreArticle">
                     <h6>Catégorie de l'article :</h6>
                     <input type="text" class="cat-art" id="textareaCatArticle">
                     <h6>Choisir une photo</h6>
                    <input type="file" value="Ajouter une image" id="addImage"  > 
                    <input   name=""  cols="35" rows="10" placeholder="Ici taper votre article..." id="textareaArticle" /><br>
                    <input type="submit" value="Valider"  id="button" >
                </form>
            </div>


 <!------ Cates des articles ------->
<?php
  require "./includes/cardArticle.php";
 ?>
  

 <!------ footer ------->

<?php
  require "./includes/footer.php";
 ?>
 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="articles.js"></script>
</body>
</html>