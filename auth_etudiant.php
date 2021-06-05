<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="auth_etudiant.css">
<title>authentification etudiant</title>
</head>
<body>
 <p>MINISTERE DE LA COMMUNICATION,DE<br>
  L'ECONOMIE NUMERIQUE ET DE LA POSTE
</p>
<p id="cote">REPUBLIQUE DE COTE D'IVOIRE<br>
  Union-Discipline-Travail
</p>
<div id="ligne_first"><hr align="right" style="width: 100px;color: #706b64;background-color:#706b64;height: 5px; "/></div>
<div id="ligne_second"><hr align="left" style="width: 200px;color: #706b64;background-color:#706b64;height: 5px; "/>
<img src="esatic.png" width="15%" height="15%" alt="logo d'esatic" border="blue"/>
<hr style="width: 1300px;color: black;background-color:black;height: 5px; "/>
<div id="formulaire">
<center>
<table width="600" border="10"solid>
<tr>
  <font color="red"> 
  <th>
  <form id="monform" name="form1" method="post" action="auth_etudiant.php">
     <h1><label>Matricule :<br/>
      <input type="text" name="matricule"  />
    </label><h1/>
    <h1><label>Nom :<br/>
      <input type="text" name="nom"  />
    </label><h1/>
    <p>
    <label>Prenom :<br/>
      <input type="text" name="prenom"  />
    </label>
    </p>
    <p>
    <label>Sexe :<br/>
      <input type="text" name="sexe"  />
    </label>
    </p>
    <p>
    <label>Date de naissance :<br/>
      <input type="date" name="date_de_naisance"  />
    </label>
    </p>
    <p>
    <label>Telephone :<br/>
      <input type="number" name="telephone"  />
    </label>
    </p>
    <p>
    <label>Email :<br/>
      <input type="Email" name="email"  />
    </label>
    </p>
    <p>
    <label>Mot de passe :<br/>
      <input type="password" name="mot_de_passe"  />
    </label>
    </p>
     <label>Photo :<br/>
      <input type="file" name="photo"  />
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
  $bdd = new PDO('mysql:host=localhost;dbname=projet2019','root','');
   }
catch(Exception $e)
  {

     die('Erreur : '.$e->getMessage());

 } 
?>
 <?php

    if(isset($_POST['matricule']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and (isset($_POST['date_de_naisance'])) and isset($_POST['telephone']) and isset($_POST['email']) and isset($_POST['mot_de_passe']) and isset($_POST['photo']) and isset($_POST['bouton']))

     {
         if(!empty($_POST['matricule']) and !empty($_POST['nom'])  and !empty($_POST['prenom']) and !empty($_POST['sexe']) and !empty($_POST['date_de_naisance']) and !empty($_POST['telephone']) and !empty($_POST['email']) and !empty($_POST['mot_de_passe']) and !empty($_POST['photo']))
                     
                       {

                     $matricule=$_POST['matricule'];
                     $nom=$_POST['nom'];
                     $prenom=$_POST['prenom'];
                     $sexe=$_POST['sexe'];
                     $date_naisance=$_POST['date_de_naisance'];
                     $telephone=$_POST['telephone'];
                     $email=$_POST['email'];
                     $mot_de_passe=$_POST['mot_de_passe'];
                     $photo=$_POST['photo'];
                      
                    
                    
                        
$reponse = $bdd->prepare('INSERT INTO etudiant(matricule,nom,prenom,sexe,date_de_naissance,telephone,email,mot_de_passe,photo) VALUES(:matricule,:nom,:prenom,:sexe,:date_de_naissance,:telephone,:email,:mot_de_passe,:photo)');
$reponse->execute(array(
  'matricule' => $matricule,
  'nom' => $nom,
  'prenom' => $prenom,
  'sexe' =>$sexe,
  'date_de_naissance' => $date_naisance,
  'telephone' => $telephone,
  'email' => $email,
  'mot_de_passe' => $mot_de_passe,
  'photo'=>$photo));
                       
  echo "<script>alert('inscription validé')</script>"; 
   header('location:evaluation_des_professeurs.php');
}


      else {
        echo "<script>alert('Veillez remplir tous les champs')</script>"; 
}
  



}
 

                      

   
    

?>

<!-- <a href="#"><font color="black"> Cliquer pour Verifier votre inscription
 --></font></a>
</th>
</font>
</tr>
</table>
</center>
</body>
</html>