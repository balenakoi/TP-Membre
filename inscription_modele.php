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
    $pseudo = addslashes($_POST['pseudo']);
     $q2 = array('pseudo'=>$pseudo);
    $sql = 'SELECT * FROM `membres` WHERE pseudo= :pseudo ';
    $req2 = $bdd->prepare($sql);
    $req2->execute($q2);
    if ($req2->rowCount() == 1){
      echo "Ce pseudo existe déjà !";
      // header('Location:inscription_vue.php');

     }
      else{

    // Basic verifications
    if (isset($_POST['pseudo']) AND isset($_POST['pass']) AND isset($_POST['email']) AND ($_POST['pass'] == $_POST['pass_verif']))
    {
      if (!empty($_POST['pseudo']) AND !empty($_POST['pass']) AND !empty($_POST['email']) AND ($_POST['pass'] == $_POST['pass_verif']))
      {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = htmlspecialchars($_POST['pass']);
        $email = htmlspecialchars($_POST['email']);

        if (preg_match("#^[a-zA-Z0-9]{2,15}$#", $pseudo) AND preg_match("#^[a-zA-Z0-9!_]{6,}$#", $pass ) AND preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
        {

        $pass_hache = password_hash($pass,  PASSWORD_DEFAULT);
        //insert to the data base
        $req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email) VALUES(?, ?, ?)');
        $req->execute(array($pseudo, $pass_hache, $email));
        header('Location:connexion_vue.php');
        }

        else
        {
        $reponse = 'Veuillez remplir correctement tous les champs';
        header('Location:inscription_vue.php?reponse=' . $reponse);
        }
    }
  }
    else
    {

       header('Location:inscription_vue.php?reponse=' . $reponse);

    }
      }
