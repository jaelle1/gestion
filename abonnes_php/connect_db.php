<?php 

try {
    $base = new PDO('mysql:host=localhost;dbname=gestion_abonnes', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch (Exception $e) {
    die('Erreur vous avez un probleme de connexion a la base de donnees:');
}

?>