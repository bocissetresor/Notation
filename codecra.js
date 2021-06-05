function statbar(a,b,c)
{
var ctx = document.getElementById(a).getContext('2d')
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
            labels :b,
            datasets : [{
                            label : "statist",
                            backgroundcolor : 'rgba(225,99,132)',
                            bordercolor: 'rgba(225,99,135)',
                            data:c,
                            

            }]

        },
    options: {}
            });
        }