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
        <div class="accueil"><a href = "index.php">Accueil</a></div>
        <div class="déconnexion"><a href="index.php">Déconnexion</a></div>
    </div>

         <h2 style="text-align:center;">Ici c'est la connexion</h2>

          <div class="formulaire">

              <p id="retour_connexion"></p>
              <form class="form" action="connexion_modele.php" method="post">
                  <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/><br/>
                  <label for="pass">Mot de passe</label> : <input type="password" name="pass" id="pass"/><br/>
                  <input type="submit" value="Envoyer"/ style="width:100%;">

              </form>
          </div>
  </body>
</html>
