<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
    
<body>
<div class="retour">
<a href="accueil.php"><i class="fa fa-home" style="color:#1c3a72"></i></a>
</div>
<div class="container">
        <h1> CONTACT</h1>
            <form action="addContact.php" method="POST">
                <div class="usr">
                    <span class="box"><label for="username">Your Username: </label>
                    <input type="text" id="username" name="username" maxlength="10" placeholder="Enter your Username"></span>
                </div>
                <div class="pass">
                    <span>
                        <label for="email">Your E-mail: </label>
                        <input type="email" id="email" name="email" placeholder="Enter your E-mail">
        
                        <label for="tel">Your Phone Number:</label>
                        <input type="text" id="tel" name="tel" value="+261">
                        
                        <label for="contenu">Contenu</label>
                        <textarea type="text" id="conteny" name="contenu" placeholder="Write something..." style="height:20px"></textarea>
                        
                        <input type="submit" value="SUBMIT">
                        
                    </span>
                </div>
            </form>
            <form action="contact.php" method="POST">
                <input href="contact.php" type="submit" value="CANCEL">
            </form>

    </div>
</body>
</html>