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

    <body>
      <div class="nav">
          <div class="accueil"><a href = "index.php">Accueil</a></div>
          <div class="déconnexion"><a href="index.php">Déconnexion</a></div>
      </div>
        <h2 style="text-align:center;">Page d'inscription</h2>
        <div class="formulaire">

            <p id="retour_inscription"></p>

            <form action="inscription_modele.php" method="post">
                <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br/>
                <label for="pass">Mot de passe <br>(6 caractères minimum)</label> : <input type="password" name="pass" id="pass"/><br/>
                <label for="pass_verif">Retapez votre<br> mot de passe</label> : <input type="password" name="pass_verif" id="pass_verif"/><br/>
                <label for="email">Adresse email</label> : <input type="text" name="email" id="email"/><br/>
                <input type="submit" value="Valider"/ style="width:100%;">
            </form>
        </div>

    </body>
</html>
