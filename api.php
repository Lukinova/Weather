<?php
$apiResult = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Saint%20Petersburg,ru&appid=f2d6eac751834befaefa082be2133dff');
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