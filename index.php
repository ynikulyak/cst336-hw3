<!DOCTYPE html>
<html>
<head>
	<title>Weather Forcast</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body id="body">
	<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="#">
    <img src="img/weather.png" class="d-inline-block align-top" alt="">
    <span id="logo">Weather Forecast</span>
  	</a>
  	<form id="form" class="form-inline">
    <input id="zip" class="form-control" type="text" placeholder="Enter your Zip Code">
    <input id="click-btn" class="btn btn-outline-success my-2 my-sm-0" value="Submit" type="submit">
  	</form>
	</nav>
	<div class="page-header">&nbsp;<span id="zipError"> </span>
	</div>
<div id="result-weather">
	<div id="info">
	<h1><span id="city"></span></h1>
	<span id="description"></span><br>
	<span id="temperature"></span>
</div>
	<div class="table-div">
	<table class="table">
		<tr>
			<td><small>Low</small><br><span id="low"></span></td>
			<td><small>High</small><br><span id="high"></span></td>
		</tr>
		<tr>
			<td><small>Humidity</small><br><span id="humidity"></span></td>
			<td><small>Pressure</small><br><span id="pressure"></span></td>
		</tr>
		<tr>
			<td><small>Visibility</small><br><span id="visibility"></span></td>
			<td><small>Wind</small><br><span id="wind"></span></td>
		</tr>
		<tr>
			<td><small>Sunrise</small><br><span id="sunrise"></span></td>
			<td><small>Sunset</small><br><span id="sunset"></span></td>
		</tr>
	</table>
</div>
	

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/weather.js"></script>
</body>
</html>