<?php
require("connection.php");
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


<div class="row">
    <div class="col s12"><p><h2>Espace Etudiant :</h2></p></div>
    <div class="col s12 m4 l2"><p></p></div>
    <div class="col s12 m4 l8"><p>
<?php
    // $_GET['matricule']= $_SESSION['matricule'];
    $req = $bdd->prepare('SELECT nom, prenom, date_naissance, classe FROM etudiant WHERE matricule = ?');
    $req->execute(array($_GET['matricule']));

    while ($donnees = $req->fetch())
    {
      echo "<h3>Vous Etre vraiment Mr :<?h3>" .'<br />';
      echo $donnees['nom'] . '  ' . $donnees['prenom'] .'<br />';
      echo 'En classe de : ' . $donnees['classe'] . '<br />';
      echo 'Née le : ' . $donnees['date_naissance'] . '<br />';

    }
    $req->closeCursor();
?></p></div>
    <div class="col s12 m4 l2"><p></p></div>
  </div>
  <div class="row">
    <div class="col s12 m6 l3"><p></p></div>
    <div class="col s12 m6 l3"><p></p></div>
    <div class="col s12 m6 l3"><p></p></div>
    <div class="col s12 m6 l3"><p> <ul>
<li> Suivant  :<a href="formulaire.php" class="btn # e65100 orange foncé-4 darken-2 black-text pulse"><i class="large material-icons">S </i></a> </li>
<li> Precedent:<a href="authetudiant.php" class="btn # ff9800 orange black-text "><i class="large material-icons">P </i></a> </li>
<li> Menu     :<a href="menu.php" class="btn # ffcc80 orange lighten-3 black-text pulse"><i class="large material-icons">M </i></a> </li>

</ul></p></div>
  </div>




</body>
</html>

