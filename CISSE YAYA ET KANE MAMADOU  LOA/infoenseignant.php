<?php
require("connection.php");

    //$_GET['matricule']= $_SESSION['matricule'];
    $req = $bdd->prepare('SELECT nom, prenom, date_naissance, matiere  FROM enseignant WHERE matricule = ?');
    $req->execute(array($_GET['matricule']));

    while ($donnees = $req->fetch())
    {
        echo " <h3>Etre vous vraiment Mr :<?h3>"  .'<br />';
        echo $donnees['nom'] . '  ' . $donnees['prenom'] .'<br />';
        echo 'En classe de : ' . $donnees['matiere'] . '<br />';
        echo 'Née le : ' . $donnees['date_naissance'] . '<br />';

    }
    $req->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body background="image1.png">

<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<ul>
<li> Suivant  :<a href="statestique.php" class="btn # e65100 orange foncé-4 darken-2 black-text pulse"><i class="large material-icons">S </i></a> </li>
<li> Precedent:<a href="authenseignant.php" class="btn # ff9800 orange black-text "><i class="large material-icons">P </i></a> </li>
<li> Menu     :<a href="menu.php" class="btn # ffcc80 orange lighten-3 black-text pulse"><i class="large material-icons">M </i></a> </li>

</ul>
</body>
</html>

