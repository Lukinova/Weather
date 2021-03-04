<?php
ini_set('display_errors', 'On');
$apiKey = 'f2d6eac751834befaefa082be2133dff'; 
$city = (isset($_GET['city'])) ? $_GET['city'] : null;
$apiResult = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='. (($city) ? $city : ('Saint Petersburg')) .'&appid='.$apiKey);
$apiResult = json_decode($apiResult);
$name = ($apiResult->name);
$description = ($apiResult->weather[0]->description);
$temp = (round($apiResult->main->temp - 273));
$feels_like = (round($apiResult->main->feels_like - 273));
$wind_speed = ($apiResult->wind->speed);
$pressure = ($apiResult->main->pressure);
$humidity = ($apiResult->main->humidity);
$clouds = ($apiResult->clouds->all);
$sunrise = date('h:i:s' ,$apiResult->sys->sunrise);
$sunset = date('h:i:s' ,$apiResult->sys->sunset);
$icon = ($apiResult->weather[0]->icon);
?>
<ul>
	<span class="city_name"><?php echo $name?></span>
	<li><img src="http://openweathermap.org/img/wn/<?=$apiResult->weather[0]->icon;?>@2x.png"/><?php echo $description;?></li>
	<li>Now:<?php echo $temp?>℃</li>
	<li>Feels like:<?php echo $feels_like?>℃</li>
	<li>Wind speed:<?php echo $wind_speed?>m/s</li>
	<li>Pressure:<?php echo $pressure?>mbar</li>
	<li>Humidity:<?php echo $humidity?>%</li>
	<li>Clouds:<?php echo $clouds?>%</li>
	<li>Sunrise:<?php echo $sunrise?>am</li>
	<li>Sunset:<?php echo $sunset?>pm</li>
</ul>