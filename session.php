<?php
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    // Je sécurise le login ici
    include('conndb.php');
    $req = $bdd->prepare('SELECT id FROM user WHERE login = ? AND password = ?');
    $req->execute(array($_POST['username'], $_POST['password']));
    $data = $req->fetch();

    if($username == ''){
        header('Location: login.php');
    }
    elseif($password == ''){
        header('Location: login.php');
    }
    // Je mets quelques conditions pour sécuriser le login
    elseif (!$data) {
        
        
    }
    else{
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: accueil.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Failed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/denied.css">
</head>
<body>
	<div id="notfound">
		<div class="erreur">
			<div class="denied">
                <h1>Oops! Login Failed</h1>
                <h2>The username and password you entered did not match our records.Please click GO TO LOGIN 
                or click CONTAC US if there is any problem</h2>
			</div>
		</div>
        <div class="acceuil">
            <section class="home1">
                <a class="boutton" href="login.php"><strong>GO TO LOGIN</strong></a>
                <a class="boutton" href="contact.php"><strong>CONTACT US</strong></a>

            </section>
        </div>
    </div>
</body>
</html>
