<?php
require("connection.php");
  
    $req = $bdd->query('SELECT * FROM commentaire WHERE matiere=\'POO\'');
    $i=0;
    $p1=0;
    $p2=0;
    $p3=0;
    $p4=0;
    $p5=0;
    $p6=0;
    $p7=0;
    $p8=0;
    $p9=0;
    $p10=0;
    $p11=0;
    $p12=0;
 
    while ($donnees=$req->fetch()) {
      $i=$i+1;
      $p1=$p1+$donnees['p1'];
      $p2=$p2+$donnees['p2'];
      $p3=$p3+$donnees['p3'];
      $p4=$p4+$donnees['p4'];
      $p5=$p5+$donnees['p5'];
      $p6=$p6+$donnees['p6'];
      $p7=$p7+$donnees['p7'];
      $p8=$p8+$donnees['p8'];
      $p9=$p9+$donnees['p9'];
      $p10=$p10+$donnees['p10'];
      $p11=$p11+$donnees['p11'];
      $p12=$p12+$donnees['p12'];
    }
    $req->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <script src="chart.bundle.js"></script>
  <script src="codecra.js"></script>
    
</head>
<body>
<canvas id="myChart"></canvas>
<script> 
 
    var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
        // The type of chart we want to create
          type: 'bar',

          // The data for our dataset
          data: {
            labels: ["Qestion1", "Qestion2", "Qestion3", "Qestion4", "Qestion5", "Qestion6", "Qestion7", "Qestion8", "Qestion9", "Qestion10", "Qestion11", "Qestion12"],
            datasets: [{
            label: " First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo($p1/$i); ?>,<?php echo($p2/$i); ?>,<?php echo($p3/$i); ?>,<?php echo($p4/$i); ?>,<?php echo($p5/$i); ?>,<?php echo($p6/$i); ?>,<?php echo($p7/$i); ?>,<?php echo($p8/$i); ?>,<?php echo($p9/$i); ?>,<?php echo($p10/$i); ?>,<?php echo($p11/$i); ?>,<?php echo($p12/$i); ?> ],
          }]
          },
          option:{}
  });

</script>
</body>
</html>

<?php
require("connection.php");
  
    $req = $bdd->query('SELECT * FROM commentaire WHERE matiere=\'POO\'');
    

    while ($donnees = $req->fetch())
    {
        //echo($donnees['nom']);
        
    }
    $req->closeCursor();
?>

