<?php
 try {
    $bdd = new PDO ('mysql:host=localhost;dbname=page', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

?>