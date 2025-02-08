 <?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/event.css">
</head>
<body>

<div class="retour">
    <a href="accueil.php"><i class="fa fa-home" style="color:#1c3a72"></i></a>
</div>

<?php
    //include('navbar.php');
?>
<!-- j'affiche ici les évènements qui se trouvent dans la base de données-->
<?php
    include('conndb.php');
    $req = $bdd->query('SELECT * FROM event ORDER BY date_event DESC');
    /*while ($donnees = $req->fetch()) {
        ?>
       <?php echo '<h1>'.$donnees['objet'].'</h1></br>';?>
       <?php echo $donnees['date_event'].'</br>';?>
       <?php echo '<em>'.$donnees['lieu'].'</em></br>';?>
       <a href="event_details.php?event=<?php echo $donnees['id']; ?>">Détails</a>
    <?php
    }
    $req->closeCursor();*/
    $datas = $req->fetchAll();
?>
   <table class="tableau-style">
            <tr>
                <th>Objet</th>
                <th>Date</th>
                <th>Lieu</th>
            </tr>
            <?php foreach ($datas as $data): ?>
                <tr>
                <td><?php echo $data['objet'] ?></td>
                <td><?php echo $data['date_event'] ?></td>
                <td><?php echo $data['lieu'].'<br>' ?><button><a class="lol" href="event_details_d.php?event=<?php echo $data['id']; ?>">Détails</a></button></td>
</td>
            </tr> 
            <?php endforeach ?>
            
                    </table>
        <?php $req->closeCursor(); ?>

</body>
</html>