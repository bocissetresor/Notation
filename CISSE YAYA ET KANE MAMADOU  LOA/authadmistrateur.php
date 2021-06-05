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

<form  method="GET" action="">
<p><h3>Cher Administrateur veuillez saisir votre matricule </h3> :<input type="text" name="matricule"/></p>
<p><div><input type="submit" value="Envoyer" name="send"> </div></p>

</body>
</html>


<?php
if (isset($_GET["send"]))
{
    $matricule =$_GET["matricule"];
        if (preg_match("#123456#", $matricule))
    {
        header("location:infoadminiistrateur.php");
    }
    else
    {
        echo"Matricule invalide ";
    }
}
?>