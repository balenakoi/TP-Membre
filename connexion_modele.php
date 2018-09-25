<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta name="description" content="">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">

</head>
<body>

  <div class="nav">
      <div class="déconnexion"><a href = "index.php">Deconnexion</a></div>

  </div>


</body>
</html>
<?php

// Connection to the database
include("../password1/password.php");
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tpmembres;charset=utf8', 'root', $password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$pseudo = htmlspecialchars($_POST['pseudo']);
//  Récupération de l'utilisateur et de son pass hashé
if (isset($_POST['pseudo']) AND isset($_POST['pass']))
{
  if (!empty($_POST['pseudo']) AND !empty($_POST['pass']))
  {
      $req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
      $req->execute(array(
       'pseudo' => $pseudo));
        $resultat = $req->fetch();
      // Comparaison du pass envoyé via le formulaire avec la base
       $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);


      if (!$resultat)

      {
          echo 'Mauvais identifiant ou mot de passe !';
      }

        else
        {
            if ($isPasswordCorrect)
             {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                echo 'Vous êtes connecté !';
            }

          else {
              echo 'Mauvais identifiant ou mot de passe !';
          }

      }
    }else {
      header('Location:connexion_vue.php');
    }
    }
    ?>
