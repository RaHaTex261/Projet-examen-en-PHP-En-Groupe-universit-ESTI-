<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Happy</title>
</head>
<body>
  <div class="menu-bar">
        <ul>
            <li class="active"><a href="accueil.php"><i class="fa fa-home"></i>    Home</a></li>
            <li><a href="about.php"><i class="fa fa-info-circle"></i>    About</a></li>
            <li><a href="event.php"><i class="fa fa-calendar"></i>    Évènement</a></li>
            <li><a href="contact.php"><i class="fa fa-id-card"></i>    Contact</a></li>
            <li><a href="administration.php"><i class="fa fa-home"></i>    Administration</a></li>
            <li></li>
            <li><a href="deconnexion.php"><strong><i class="fa fa-power-off"></i>    Déconnexion</strong></a></li>

        </ul>               
            
            <div class="title">
                <h1>Welcome <?php echo $_SESSION['username']; ?> , thank you for registering on our web page &#128522</h1>
            </div>
        
    </div>
    
</body>

</html>