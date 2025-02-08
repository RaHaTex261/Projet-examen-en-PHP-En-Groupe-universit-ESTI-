<?php
    include('conndb.php');

    $req = $bdd->prepare('INSERT INTO event(objet, date_event, lieu, contenu) VALUES(?, ?, ?, ?)');
    $req->execute(array($_POST['objet'], $_POST['date'], $_POST['lieu'], $_POST['contenu']));
    header('Location: administration.php');
    
?>