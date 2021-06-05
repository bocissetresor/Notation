<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<table width="600" border="10"solid>
<tr>
  <font color="red"> 
  <th>
  <form id="monform" name="form1" method="POST" action="">
    <h1><label>Nom :<br/>
      <input type="text" name="nom"  />
    </label><h1/>
    <p>
    <label>Prenom :<br/>
      <input type="text" name="prenom"  />
    </label>
    </p>
    <h1><label>Matricule :<br/>
      <input type="text" name="matricule"  />
      <p>
    <label>Classe :<br/>
      <input type="text" name="classe"  />
    </label>
    </p>
    <p>
    <label>Date de naissance :<br/>
      <input type="date" name="date_naissance"  />
    </label>
    </p>
    <label>
      <input type="submit" name="bouton"  value="Envoyer" />
    </label>
    <label>
      <input type="reset" name="bouton"  value="annuler" />
    </label><br>
</form>

<?php
try
  {
  $bdd = new PDO('mysql:host=localhost;dbname=projet','root','');
   }
catch(Exception $e)
  {

     die('Erreur : '.$e->getMessage());

 } 
?>

 <?php
 

    if(isset($_POST['bouton']))

     {
         if(!empty($_POST['nom']) and !empty($_POST['prenom'])  and !empty($_POST['matricule']) and !empty($_POST['date_naissance']) and !empty($_POST['classe']))
                     
                       {

                     $nom=$_POST['nom'];
                     $prenom=$_POST['prenom'];
                     $matricule=$_POST['matricule'];                    
                     $date_naissance=$_POST['date_naissance'];
                     $classe=$_POST['classe'];

                        
$reponse = $bdd->prepare('INSERT INTO etudiant(nom, prenom, matricule,
 date_naissance, classe) VALUES(:nom, :prenom, :matricule, :date_naissance, :classe)');
$reponse->execute(array(
  'nom' => $nom,
  'prenom' => $prenom,
  'matricule' => $matricule,
  'date_naissance' => $date_naissance,
  'classe' => $classe));
                        
   header('location:merci.php');
}


      else {
        echo "<script>alert('Veillez remplir tous les champs')</script>"; 
}
  
}
 

?>
</font></a>
</th>
</font>
</tr>
</table>
</center>
</body>
</html>