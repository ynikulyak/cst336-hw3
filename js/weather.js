var zipCodeValid = false;

window.onload = start();

function start(){
	$("#result-weather").hide();
	$("#body").css("background-image", "url('./img/welcome.png')");
	$("#body").css("background-repeat", "no-repeat");
	$("#body").css("background-size", "cover");
}

$("#form").on("submit", function() {
    event.preventDefault();
});


function validate(){
	$.ajax({
				method: "GET",
				url: "https://cst336.herokuapp.com/projects/api/cityInfoAPI.php",
				dataType: "json",
				data: {"zip": $("#zip").val()},
				success: function(result, status){
					//alert(result.city);
					if($("#zip").val().length == 5){
						$("#zipError").html(" ");

						zipCodeValid = true;
						weather();
					}else{
						zipCodeValid = false;
						$("#result-weather").hide();
						$("#zipError").html("Zip code not found");
						$("#body").css("background-image", "url('./img/oops.png')");
						$("#body").css("background-repeat", "no-repeat");
						$("#body").css("background-size", "cover");
					}
				}
			});
}	

function weather(){
				$("#result-weather").show();

				$.ajax({
					method: "GET",
					url: "https://api.openweathermap.org/data/2.5/weather?&APPID=cad194366bc68ad8027d37715d74fb0b",
					dataType: "json",
					data: {"zip": $("#zip").val(), units: "imperial"},
					success: function(result, status){
						$("#city").html(result.name);
						$("#description").html(result.weather[0].main);
						$("#temperature").html((result.main.temp).toFixed(0) + " F");
						$("#low").html((result.main.temp_min).toFixed(0) + " F");
						$("#high").html((result.main.temp_max).toFixed(0) + " F");
						$("#humidity").html(result.main.humidity + "%");
						$("#pressure").html((result.main.pressure /33.86).toFixed(2) + "inHg");
						$("#visibility").html(Math.floor(result.visibility / 1609) + "mi");
						$("#wind").html((result.wind.speed).toFixed(0)+ "mph");
						$("#sunrise").html(unixTimeConverter(result.sys.sunrise) + "AM");
						$("#sunset").html(unixTimeConverter(result.sys.sunset) + "PM");
						dayTime();
						}
				});
}


$("#click-btn").on("click", function(){
	validate();
			
});		

function dayTime(){
	var today = new Date();
	var time = today.getHours();
	if(time > 5 && time < 19){
		$("#body").css("background-image", "url('./img/sky.png')");
		$("#body").css("background-repeat", "no-repeat");
		$("#body").css("background-size", "cover");
	}else{

		$("#body").css("background", "#000 url(http://www.script-tutorials.com/demos/360/images/stars.png)");
		$("#body").css("color", "white");
		$(".table").css("color", "white");
	}
}

function unixTimeConverter(unix_timestamp){
	var date = new Date(unix_timestamp*1000);
	// Hours part from the timestamp
	var hours = date.getHours();
	// Minutes part from the timestamp
	var minutes = "0" + date.getMinutes();

	// Will display time in 10:30:23 format
	var formattedTime = hours + ':' + minutes.substr(-2);
	return formattedTime;
}
