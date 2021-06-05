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


<form  method="GET" action="infoetudiant.php">
<h3>Cher Etudiant veuillez saisir votre matricule :<input type="text" name="matricule"/></h3>
<p><button classe="btn btn-large brown"><i class="material-icons left "></i> <input type="submit" value="Envoyer" name="send"></button></p>

</body>
</html>


<?php
	require("connection.php");
	
if (isset($_GET["send"])) 

{
	if(!empty($_GET["matricule"]))
	{
    //$_SESSION['matricule']=$_GET['matricule'];
    $req = $bdd->prepare('SELECT nom FROM etudiant WHERE matricule = ?');
    $req->execute(array($_GET['matricule']));
    $donnees = $req->fetch();
    $req->closeCursor();
    }
    else { echo "remplie le champs svp";}
}
?>