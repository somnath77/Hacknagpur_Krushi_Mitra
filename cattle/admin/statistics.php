<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!-- <script src='main.js'></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Livestock Percentage Share"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 68.45, label: "Cow"},
			{y: 7.31, label: "Buffalo"},
			{y: 7.06, label: "Sheep"},
			{y: 4.91, label: "goat"},
			{y: 11.26, label: "Others"}
		]
	}]
});
chart.render();
var chart = new CanvasJS.Chart("districtContainer", {
	animationEnabled: true,
	title: {
		text: "District Percentage Share"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 23.15, label: "Hingana"},
			{y: 7.31, label: "Kalmeshwar"},
			{y: 17.06, label: "Umred"},
			{y: 4.91, label: "Ramtek"},
			{y: 48.48, label: "Others"}
		]
	}]
});
chart.render();

var chart = new CanvasJS.Chart("useContainer", {
	animationEnabled: true,
	title: {
		text: "Use Percentage Share"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 34.5, label: "Luggage"},
			{y: 55.5, label: "Milk"},
			
			{y: 10, label: "Others"}
		]
	}]
});
chart.render();

var chart = new CanvasJS.Chart("genderContainer", {
	animationEnabled: true,
	title: {
		text: "Gender Percentage Share"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 43.7, label: "Male"},
			{y: 56.3, label: "Female"},
			
		]
	}]
});
chart.render();


}
</script>

</head>
<body>
<?php  include 'header.html' ?>

    <div class="container"> 
<b>
     <h2>Livetstock Statistics</h2>
     <h6>Total Livestock : 175 </h6>
     <h6>Cow : 119 </h6>
     <h6>Buffalo : 15 </h6>
     <h6>Sheep : 14 </h6>
     <h6>Goat : 8 </h6>
     <h6>Other : 21 </h6>
</b>    
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<div id="districtContainer" style="height: 300px; width: 100%;"></div>
<div id="useContainer" style="height: 300px; width: 100%;"></div>
<div id="genderContainer" style="height: 300px; width: 100%;"></div>


</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
 </body>
</html>