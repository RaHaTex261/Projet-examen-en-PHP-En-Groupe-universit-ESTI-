<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/event_d.css">
    <title>Happy</title>
</head>
<body>
<div class="retour">
    <a href="event.php"><i class="fa fa-home" style="color:#1c3a72"></i></a>
</div>
    <?php
        include('conndb.php');

        $req = $bdd->prepare('SELECT * FROM event WHERE id = ?');
        $req->execute(array($_GET['event']));
        $donnees = $req->fetch();
        ?>
        <div class="bob"> <?php echo '<h1>'.$donnees['objet'].'</h1></br>';?>
        <div class="bob2"><?php echo $donnees['date_event'].'</br>';?>
        <?php echo $donnees['lieu'].'</br>';?>
        <?php echo '<em>'.$donnees['contenu'].'</em></br>';?></div></div>
</body>
</html>
