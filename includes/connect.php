
<?php 

ini_set('display_errors', 'On');
error_reporting(E_ALL);
 
$dsn ='mysql:dbname=blog;host=localhost;port=8889;charset=utf8';
$user ="blog";
$pwd='vu5G9yFa8WAWTxQe';

$pdo = new PDO($dsn, $user, $pwd, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

 
if (!$dsn){
  echo' Pas de connexion à la base de données';
}
?>
