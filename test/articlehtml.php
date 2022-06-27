<?php
require_once './../includes/header.php';
require_once './../includes/navbar.php';
?>

 


<div class="card mb-4  bg-light  " id="articlehtml "    >
  <div class="row g-5">
    <div class="col-md-5 mb-7 mt-9 text-dark bg-light   ">
      <a href="./../test/insertForm.php" target="info">Ajouter un article</a><br><br>
      <a href="./../test/deleteForm.php" target="info">Supprimer un article</a><br> <br>
      <a href="./../test/updateForm.php" target="info">Modifier un article</a><br> <br>
      <a href="./../test/selectForm.php" target="info">Chercher un article</a><br> <br>
    </div>
    <div class="col-md-5 mb-7   "    >
      <div class="card-body    text-dark"     >
              <iframe name="info" src="" frameborder="0" style="height: 290px;"></iframe>
      </div>
    </div>
  </div>
</div>








<?php
require_once './../includes/footer.php';
?>
