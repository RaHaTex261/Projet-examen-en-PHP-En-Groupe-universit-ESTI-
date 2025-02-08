<?php
    include('conndb.php');


    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if($username == ''){
        header('Location: signin.php');
    }
    elseif($password == ''){
        header('Location: signin.php');
    }
    else{
        //session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        //header('Location: accueil.php');
        $req = $bdd->prepare('INSERT INTO user(login, password) VALUES (?, ?)');
        $req->execute(array($_POST['username'], $_POST['password']));
        header('Location: login.php');
    }

?>