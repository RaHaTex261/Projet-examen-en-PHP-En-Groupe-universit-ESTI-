<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
<?php
    //include('navbar.php');
?>

    <!-- J'ajoute ici le formulaire pour ajouter les évènements-->

    <div class="retour">
<a href="accueil.php"><i class="fa fa-home" style="color:#00008b"></i></a>
</div>
<div class="container">
        <h1> Administration</h1>
            <form action="addEvent.php" method="POST">
                <div class="usr">
                    <span class="box"><label for="username">Objet: </label>
                    <input type="text" id="objet" name="objet"  placeholder="Enter the object"></span>
                </div>
                <div class="pass">
                    <span>
                        <label for="email">Date: </label>
                        <input type="date" id="date" name="date" placeholder="Choose the date">
        
                        <div class="lieu"><label for="tel">Lieu:</label>
                        <input type="text" id="lieu" name="lieu" placeholder="Enter the location"></div>
                        
                    
                        <div><label for="contenu">Contenu</label>
                        <textarea type="text" id="contenu" name="contenu" placeholder="Write something..." style="height:20px"></textarea></div>
                        
                        
                        <input type="submit" value="SUBMIT">
                        
                    </span>
                </div>
            </form>
            <form action="showcontacts.php">
                <input type="submit" value="SEE CONTACTS">
            </form>
            <form action="administration.php" method="POST">
                <input href="administration.php" type="submit" value="CANCEL">
            </form>

    </div>




























   <!-- <form action="addEvent.php" method="POST">
        <label for="objet">Objet :</label>
        <input type="text" id="objet" name="objet">
        <label for="date">Date : </label>
        <input type="date" id="date" name="date">
        <label for="lieu">Lieu :</label>
        <input type="text" id="lieu" name="lieu">
        <label for="contenu">Contenu :</label>
        <input type="text" id="contenu" name="contenu">
        <input type="submit" value="Ajouter">
    </form>-->
    <!-- Je mets ici le formulaire pour ajouter les contacts-->
<!--
    <form action="addContact.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <label for="email">Email : </label>
        <input type="email" id="email" name="email">
        <label for="tel">Téléphone :</label>
        <input type="text" id="tel" name="tel">
        <label for="contenu">Contenu :</label>
        <input type="text" id="contenu" name="contenu">
        <input type="submit" value="Ajouter">
        -->

</body>
</html>