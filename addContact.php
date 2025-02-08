<?php
   include('conndb.php');

    $req = $bdd->prepare('INSERT INTO contact(nom, email, telephone, contenu) VALUES(?, ?, ?, ?)');
    $req->execute(array($_POST['nom'], $_POST['email'], $_POST['tel'], $_POST['contenu']));
    header('Location: administration.php');
    
?>

