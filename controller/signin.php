<?php

//Hashage du mot de passe
$password_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

// stérélisation des données
$email = htmlspecialchars($_POST['email']);
$name = htmlspecialchars($_POST['name']);

$error = "";

//verification confirmation mot de passe
if ($_POST['password'] == $_POST['confirm_password'])
{
    //verifier si le mail est libre
    $db = dbConnect();

    $req = $db->prepare('SELECT id FROM users WHERE email = :email');
    $req->execute(array(
        'email' => $email,
    ));

    $resultat = $req->fetch();

    if ($resultat)
    {
        $error = "l'utilisateur existe déjà";
    }

    else
    {
        //Si le mail est libre, l'inserer les données dans la base
        $req = $db->prepare('INSERT INTO users(email, password, name, date_inscription) VALUES(:email, :password, :name, CURDATE())');
        $req->execute(array(
            'password' => $password_hache,
            'email' => $email,
            'name' => $name
        ));

        header("location: ../index.php?action=login");

    }
}

else
{
    $error = "mots de passe différents";
}

if(!empty($error)){
    header("location: ../index.php?action=signin&error=$error&email=$email&name=$name");
}


function dbConnect()
{
    // $db = new PDO('mysql:host=localhost;dbname=noobtionary;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db = new PDO('mysql:host=mysql-noobtionary.alwaysdata.net;dbname=noobtionary_test;charset=utf8', '158775', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

?>
