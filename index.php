<?php
$apiResult = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Saint%20Petersburg,ru&appid=f2d6eac751834befaefa082be2133dff');
$apiResult = json_decode($apiResult);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<div class="selected_city">
		<div class="flex-container">
				<div class="yestaday_sity_weather">
				<ul>
					<span><?php print_r($apiResult->name);?></span>
					<li><img src="http://openweathermap.org/img/wn/<?=$apiResult->weather[0]->icon;?>@2x.png"/><?php print_r($apiResult->weather[0]->description);?></li>
					<li>Now: <?php print_r(round($apiResult->main->temp - 273));?> °C</li>
					<li>Feels: <?php print_r(round($apiResult->main->feels_like - 273));?>°C</li>
					<li>Wind: <?php print_r($apiResult->wind->speed);?> m/s</li>
					<li>Pressure: <?php print_r($apiResult->main->pressure);?>mbar</li>
					<li>Humidity: <?php print_r($apiResult->main->humidity);?>%</li>
					<li>Cloudy: <?php print_r($apiResult->clouds->all);?>%</li>
					<li>Sunrise: <?php echo date('h:i:s' ,$apiResult->sys->sunrise);?>am <img src="https://img.icons8.com/color/48/000000/morning.png"/></li>
					<li>Sunset: <?php echo date('h:i:s' ,$apiResult->sys->sunset);?>pm <img src="https://img.icons8.com/color/48/000000/evening.png"/></li>

				</ul>
			</div>
		</div>
	</div>
</body>
</html>
