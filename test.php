<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<script src="chart.bundle.js"></script>
    
</head>
<body>
<canvas id="myChart"></canvas>
<script> 

    var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
        // The type of chart we want to create
          type: 'line',

          // The data for our dataset
          data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
          }]
          },
          option:{}
  });

</script>
</body>
</html>