<?php $josn_data = include ('conexion.php');?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>linea de tiempo</title>


<style type="text/css">
#container {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto 
}

		</style>
	</head>
	<body>
<script src="code/highcharts.js"></script>
<script src="code/modules/series-label.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>


<div id="container"></div>


<script type="text/javascript">
Highcharts.chart('container', {

  

    title: {
        text: 'Prueba de Grafica'
   
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com'
    },

    xAxis: {
        title: {
            text: 'Number of Employees'
            //categories: ['Enero', 'Febro', 'Marzo', 'April', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Deciembre']
        }
    },

    xAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2020
        }

        /*series: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }*/
    },

    series: <?=$josn_data?>,

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
		</script>
	</body>
</html>
