<?php
  require("connection.php");

    if (isset($_POST['p1']) and isset($_POST['p2']) 
    	and isset($_POST['p3']) and isset($_POST['p4'])
    	 and isset($_POST['p5']) and isset($_POST['p6'])
    	  and isset($_POST['p7']) and isset($_POST['p8'])
    	   and isset($_POST['p9']) and isset($_POST['p10'])
    	    and isset($_POST['p11']) and isset($_POST['p12'])
    	     and isset($_POST['p13']) and isset($_POST['p14'])
    	      and isset($_POST['p15']) and isset($_POST['send']))

     {
         if (!empty($_POST['p1']) and !empty($_POST['p2'])
          and !empty($_POST['p3']) and !empty($_POST['p4'])
           and !empty($_POST['p5']) and !empty($_POST['p6'])
            and !empty($_POST['p7']) and !empty($_POST['p8'])
             and !empty($_POST['p9']) and !empty($_POST['p10'])
              and !empty($_POST['p11']) and !empty($_POST['p12'])
               and !empty($_POST['p13']) and !empty($_POST['p14'])
                and !empty($_POST['p15']) and !empty($_POST['date'])
                  and !empty($_POST['matiere']) and !empty($_POST['nom'])
                   and !empty($_POST['classe']))   
                       {
                     $id='';
                     $p1=$_POST['p1'];
                     $p2=$_POST['p2'];
                     $p3=$_POST['p3'];
                     $p4=$_POST['p4'];
                     $p5=$_POST['p5'];
                     $p6=$_POST['p6'];
                     $p7=$_POST['p7'];
                     $p8=$_POST['p8'];
                     $p9=$_POST['p9'];
                     $p10=$_POST['p10'];
                     $p11=$_POST['p11'];
                     $p12=$_POST['p12'];
                     $p13=$_POST['p13'];
                     $p14=$_POST['p14'];
                     $p15=$_POST['p15'];
                     $date=$_POST['date'];
                     $matiere=$_POST['matiere'];
                     $nom=$_POST['nom'];
                     $classe=$_POST['classe'];
                      
                    
                    
                        
$reponse = $bdd->prepare('INSERT INTO `commentaire` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `date`, `matiere`, `nom`, `classe`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$reponse->execute(array($id, $p1,  $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $date, $matiere, $nom, $classe));
/*	
  `id` => '',
  `p1` => $p1,
  `p2` => $p2,
  `p3` => $p3,
  `p4` => $p4,
  `p5` => $p5,
  `p6` => $p6,
  `p7` => $p7,
  `p8` => $p8,
  `p9` => $p9,
  `p10` => $p10,
  `p11` => $p11,
  `p12` => $p12,
  `p13` => $p13,
  `p14` => $p14,
  `p15` => $p15));
  */
   header('location:merci.php');

    }                   
  
   

}


      else {
        echo "<script>alert('Veillez remplir tous les champs')</script>"; 
}
  

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
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="materialize.css"/>
      <link rel="stylesheet" type="text/css" href="materialize.min.css"/>

</head>
<body>

	<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<form method="POST" action="merci.php">
	<p> <h2>QUESTIONNAIRE DESTINEE A L'EVALUATION FINALE DES ENSEIGNANT</h2> </p>

<table border="3px" solid   WIDTH="%" CELLPADDING="14px">
<tr>
	<th>Année académique</th>
	<td><input type="text" name="date"  /></td>
</tr><br/>
<tr>
	<th>La matiére</th>
	<td><input type="text" name="matiere"  /></td>
</tr><br/>
<tr>
	<th>Nom du prof</th>
	<td><input type="text" name="nom"  /></td>
</tr><br/>
<tr>
	<th>Classe</th>
	<td><input type="text" name="classe"  /></td>
</tr><br/>

<h3>INFORMATION SUR LE PROF :</h3>
</table>


      
<table border="3px" solid   WIDTH="%" CELLPADDING="14px">
<tr>
	<thead>
	<th>N°</th>
	<th>Affirmation</td>
	<th>0</th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
</tr><br/></thead>
<tr>
	<tbody>
	<td>1</td>
	<th>J'ai bien compris quels étaient les objectifs donnés au debut du cours</th>
	<td><label><input type="radio" name="p1" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p1" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p1" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p1" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p1" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>2</td>
	<th>Je pense avoir atteint les objectifs de ce cours</th>
	<td><label><input type="radio" name="p2" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p2" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p2" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p2" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p2" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>3</td>
	<th>Dans l'ensemble, j'ai appréciéce cours</th>
	<td><label><input type="radio" name="p3" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p3" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p3" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p3" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p3" value="4"><span></span></label></td>

</tr><br/><tbody>
<h3>SITUATION GENERALE :</h3>
</table>



<table border="3px" solid   WIDTH="%" CELLPADDING="14px">
<tr>
	<th>N°</th>
	<th>Affirmation</th>
	<th>0</th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
</tr><br/>
<tr>
	<td>4</td>
	<th>J'ai reçu le support de cours avant le debut de l'enseignement</th>
	<td><label><input type="radio" name="p4" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p4" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p4" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p4" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p4" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>5</td>
	<th>Le cours était présenté de façon struturée</th>
	<td><label><input type="radio" name="p5" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p5" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p5" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p5" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p5" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>6</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p6" value="0"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p6" value="1"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p6" value="2"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p6" value="3"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p6" value="4"><span></span><span></span></label></td>
</tr><br/>
<tr>
	<td>7</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p7" value="0"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p7" value="1"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p7" value="2"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p7" value="3"><span></span><span></span></label></td>
	<td><label><input type="radio" name="p7" value="4"><span></span><span></span></label></td>
</tr><br/>
<tr>
	<td>8</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p8" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p8" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p8" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p8" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p8" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>9</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p9" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p9" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p9" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p9" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p9" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>10</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p10" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p10" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p10" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p10" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p10" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>11</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p11" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p11" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p11" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p11" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p11" value="4"><span></span></label></td>
</tr><br/>
<tr>
	<td>12</td>
	<th>Les explication étaient donnés clairement</th>
	<td><label><input type="radio" name="p12" value="0"><span></span></label></td>
	<td><label><input type="radio" name="p12" value="1"><span></span></label></td>
	<td><label><input type="radio" name="p12" value="2"><span></span></label></td>
	<td><label><input type="radio" name="p12" value="3"><span></span></label></td>
	<td><label><input type="radio" name="p12" value="4"><span></span></label></td>
</tr><br/>
<h3>DEROULEMENT ET EVALUATION DU COURS :</h3>
</table>


<P>LIBRE EXPRESSION</P></br>
<br><b> Indiquez les points forts de cet enseignant: </b></br>
<textarea type="text" name="p13" rows="2" COLS"25"  > VOTRE COMMENTAIRE</textarea>

<br><b> Indiquez les points faibles de cet enseignant: </b></br>
<textarea type="text" name="p14" rows="2" COLS"25"  > VOTRE COMMENTAIRE</textarea>

<br><b> Auriez vous des suggestions à faire en vue d'améliorer cet enseignant: </b></br>
<textarea type="text"  name="p15" rows="2" COLS"25" > VOTRE COMMENTAIRE</textarea>
<p><input type="submit" value="Envoyer" name="send"> </p>



</form>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>



 
