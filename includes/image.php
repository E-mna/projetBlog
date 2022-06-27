 

 
<!-- 

<div class="image">
     <h1>Les images</h1>
     <div class="btn-ajout">
         <a href="../"> Ajouter une image</a>
     </div>

</div>
 -->

 
  <?php
 
/* var_dump($_FILES);

   

 if (isset($_FILES["image"]["name"])  &&  ($_FILES["image"]["error"] == 0))
 {      
     
             
            // je stocke l'image
            if(!isset($_SESSION["adresse"]))
            {
               $nom_dossier_visiteur = time();
               // j'ai creer un dossier de l'itulisateur
               mkdir(".//images/".$nom_dossier_visiteur); 
               // je garde le dossier dans la var seesion
               $_SESSION["chemin_dossier_visiteur"] = mkdir(".//images/".$nom_dossier_visiteur);
            }

       
        // l'adresse compète vers l'emplacement du stockage du fichier reçu 
        $dossier_destockage_fichier= $_SESSION["chemin_dossier_visiteur"]."/".$_FILES["image"]["name"];
        //je stocke le fichier que l'itulisateur à envoyé
        //move_uploaded_file([fichier reçu][emplacement temporaire], $dossier destination);   
        move_uploaded_file($_FILES["image"]["tmp_name"], $dossier_destockage_fichier);     
        //   
        $_SESSION["adresse"][] = $dossier_destockage_fichier;
         var_dump($_SESSION["adresse"]);
 } */

?> 