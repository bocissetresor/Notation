
<?php
require("connection.php");
  
    $req = $bdd->query('SELECT * FROM commentaire WHERE matiere=\'POO\'');
    

    while ($donnees = $req->fetch())
    {
        echo($donnees['nom']);
        
    }
    $req->closeCursor();
?>


<!doctype html>
<html>

<head>
	<title>Logarithmic Line Chart</title>
	<script src="chart.bundle.js"></script>
	<script src="Chart.bundle.js"></script>
	<script src="utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<body>
	<div style="width:75%;">
		<canvas id="canvas"></canvas>
	</div>
	<button id="randomizeData">Randomize Data</button>
	<script>
	var randomScalingFactor = function() {
		return Math.ceil(Math.random() * 10.0) * Math.pow(10, Math.ceil(Math.random() * 5));
	};

	var config = {
		type: 'line',
		data: {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'My First dataset',
				backgroundColor: window.chartColors.red,
				borderColor: window.chartColors.red,
				fill: false,
				data: [2, 23, 11, 12, 23, 33, 33],
			}, {
				label: 'My Second dataset',
				backgroundColor: window.chartColors.blue,
				borderColor: window.chartColors.blue,
				fill: false,
				data: [4, 43, 0, 1, 12, 23, 22],
			}]
		},
		options: {
			responsive: true,
			title: {
				display: true,
				text: 'Chart.js Line Chart - Logarithmic'
			},
			scales: {
				xAxes: [{
					display: true,
				}],
				yAxes: [{
					display: true,
					type: 'logarithmic',
				}]
			}
		}
	};

	window.onload = function() {
		var ctx = document.getElementById('canvas').getContext('2d');
		window.myLine = new Chart(ctx, config);
	};

	document.getElementById('randomizeData').addEventListener('click', function() {
		config.data.datasets.forEach(function(dataset) {
			dataset.data = dataset.data.map(function() {
				return randomScalingFactor();
			});

		});

		window.myLine.update();
	});
	</script>
</body>

</html>
