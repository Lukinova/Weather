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
	<?php
	include_once 'api.php'
	?>
	<div class="selected_city">
		<div class="flex-container">
				<div class="yestaday_sity_weather">
				<ul>
					<span class="city"><?php echo $name;?></span>
					<li><img src="http://openweathermap.org/img/wn/<?=$apiResult->weather[0]->icon;?>@2x.png"/><?php echo $description;?></li>
					<li>Now: <?php echo $temp;?> °C</li>
					<li>Feels: <?php echo $feels_like;?>°C</li>
					<li>Wind: <?php echo $wind_speed;?> m/s</li>
					<li>Pressure: <?php echo $pressure;?>mbar</li>
					<li>Humidity: <?php echo $humidity;?>%</li>
					<li>Cloudy: <?php echo $clouds;?>%</li>
					<li>Sunrise: <?php echo $sunrise;?>am <img src="https://img.icons8.com/color/48/000000/morning.png"/></li>
					<li>Sunset: <?php echo $sunset;?>pm <img src="https://img.icons8.com/color/48/000000/evening.png"/></li>

				</ul>
			</div>
			<div class="future_forecast">
				<div class="one_day">
					<span class="date"><?php echo $one_day; ?></span>
						<ul class="forecast">
							<li class="forecast">Now: <?php echo $temp_one;?>℃</li>
							<li>Feels: <?php echo $temp_feels_one?>℃</li>
						</ul>
				</div>
				<div class="two_day">
					<span class="date"><?php echo $two_day; ?></span>
						<ul class="forecast">
							<li>Now: <?php echo $temp_two;?>℃</li>
							<li>Feels: <?php echo $temp_feels_two?>℃</li>
						</ul>
				</div>
				<div class="three_day">
					<span class="date"><?php echo $three_day; ?></span>
						<ul class="forecast">
							<li>Now: <?php echo $temp_three;?>℃</li>
							<li>Feels: <?php echo $temp_feels_three?>℃</li>
						</ul>
				</div>
				<div class="thour_day">
					<span class="date"><?php echo $thour_day; ?></span>
						<ul class="forecast">
							<li>Now: <?php echo $temp_thour;?>℃</li>
							<li>Feels: <?php echo $temp_feels_thour?>℃</li>
						</ul>
				</div>
				<div class="five_day">
					<span class="date"><?php echo $five_day; ?></span>
						<ul class="forecast">
							<li>Now: <?php echo $temp_five;?>℃</li>
							<li>Feels: <?php echo $temp_feels_five?>℃</li>
						</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
