<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign in</title>
</head>
<body>
<div class="retour">
    <a href="login.php"><i class="fa fa-home" style="color:#1c3a72"></i></a>
</div>

    <div class="container">
        <div id="login_form">
            <div class="login">
                <h2>Sign in</h2>
            </div>
            <!-- Je crée un formulaire pour l'ajout d'utilisateurs-->
            <form action="acceuil.php" method="POST">
                <div class="usr">
                    <span class="box"><label for="username">Username: </label>
                    <input type="text" id="username" name="username" maxlength="10" placeholder="Enter your username"></span>
                </div>
                <div class="pass">
                    <span>
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                        <input type="submit" value="Sign in" >
                    </span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>