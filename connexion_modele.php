<?php
include("../password1/password.php");
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tpmembres;charset=utf8', 'root', $password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

    // Vérifs de base
    if (isset($_POST['pseudo']) AND isset($_POST['pass']))
    {
        // hachage du mot de passe
        $pass_hache = sha1($_POST['pass']);
        // Recupération des données
        $req = $bdd->query("SELECT * FROM membres");
        $resultat = $req->fetchAll();
        foreach ($resultat as $key => $value) {
          if ($_POST['pseudo'] == $value['pseudo'] AND sha1($_POST['pass']) == $value['pass'])
          {
            $_SESSION['pseudo'] = $value['pseudo'];
            $_SESSION['pass'] = $value['pass'];
            header('Location:index.php');
            echo "sdfghjkl";

          } else {
            header('Location:connexion_vue.php');
          }
        }
    }
    else
    {
        // message d'erreur
    }
