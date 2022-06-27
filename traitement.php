<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On vérifie que tous les champs sont remplis
    if(
        isset($_POST['nom']) && !empty($_POST['nom']) &&
        isset($_POST['sujet']) && !empty($_POST['sujet']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['message']) && !empty($_POST['message'])
    ){
        // On "nettoie" le contenu
        $nom = strip_tags($_POST['nom']);
        $sujet = strip_tags($_POST['sujet']);
        $email = strip_tags($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Ici vous devrez traiter les données

        echo " Message de {$nom} envoyé";

    }

}else{
    http_response_code(405);
    echo "Méthode non autorisée";
}