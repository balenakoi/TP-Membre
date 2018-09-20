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
    // Verifications de base
    if (isset($_POST['pseudo']) AND isset($_POST['pass']) AND isset($_POST['email']) AND ($_POST['pass'] == $_POST['pass_verif']))
    {
        $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
        $_POST['pass'] = htmlspecialchars($_POST['pass']);
        $_POST['email'] = htmlspecialchars($_POST['email']);

        if (preg_match("#^[a-zA-Z0-9]{2,15}$#", $_POST['pseudo']) AND preg_match("#^[a-zA-Z0-9!_]{6,}$#", $_POST['pass']) AND preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        {

        $pass_hache = sha1($_POST['pass']);
        $req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) VALUES(?, ?, ?, NOW())');
        $req->execute(array($_POST['pseudo'], $pass_hache, $_POST['email']));

        header('Location:connexion_vue.php');
        }

        else
        {
        $reponse = 'Veuillez remplir correctement tous les champs';
        header('Location:inscription_vue.php?reponse=' . $reponse);
        }
    }
    else
    {
        $reponse = 'Veuillez remplir tous les champs';
        header('Location:inscription_vue.php?reponse=' . $reponse);

    }
