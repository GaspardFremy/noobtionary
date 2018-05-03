<?php

  $login_email = htmlspecialchars($_POST['login_email']);
  $login_password = htmlspecialchars($_POST['login_password']);

  $db = dbConnect();

  $req = $db->prepare('SELECT id, password, name FROM users WHERE email = :email');
  $req->execute(array(
    'email' => $login_email,
  ));

  $resultat = $req->fetch();

  // Comparaison du password envoyé via le formulaire avec la bdd
  $isPasswordCorrect = password_verify( $login_password, $resultat['password']);

  if (!$isPasswordCorrect)
  {
    ?>
      <script type="text/javascript">
      window.location.href = '../index.php?action=login&error=Mauvais identifiant ou mot de passe&login_email= <?php echo $login_email ?>';
      </script>
    <?php
  }
  else
  {
      session_start();
      $_SESSION['userId'] = $resultat['id'];
      $_SESSION['name'] = $resultat['name'];
      // header('Location : ../index.php?action=connected');
      //Gros bugg avec le header location, on effectu la redirection en js.
      ?>
        <script type="text/javascript">
        window.location.href = '../index.php?action=newOnes';
        </script>
      <?php
    }


  function dbConnect()
  {
      // $db = new PDO('mysql:host=localhost;dbname=noobtionary;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $db = new PDO('mysql:host=mysql-noobtionary.alwaysdata.net;dbname=noobtionary_test;charset=utf8', '158775', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      return $db;
  }

?>
