<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Happy</title>
</head>
<body>
    <div class="container">
        <h1> Log in </h1>
            <form action="session.php" method="POST">
                <div class="usr">
                    <span class="box"><label for="username">Username: </label>
                    <input type="text" id="username" name="username" maxlength="10" placeholder="Enter your Username"></span>
                </div>
                <div class="pass">
                    <span>
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password" placeholder="Enter your Password">
                        <input type="submit" value="Log in">
                    </span>
                </div>
            </form>
            <div class="bottom-text">
                <input type="checkbox" name="remember" checked="remember"> Remember me
                <a href="signin.php">Sign in</a>
            </div>

            <div class="socials">
               <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
               <a href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"><i class="fa fa-google"></i></a>
               <a href="https://www.pinterest.fr/login/"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</body>
</html>