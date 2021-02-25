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

$api_five_days = file_get_contents('http://api.openweathermap.org/data/2.5/forecast?q=Sant%20Petersburg&appid=f2d6eac751834befaefa082be2133dff');
$api_five_days = json_decode($api_five_days);
$one_day = date('F j' ,$api_five_days->list[0]->dt);
$two_day = date('F j' ,$api_five_days->list[8]->dt);
$three_day =  date('F j' ,$api_five_days->list[16]->dt);
$thour_day = date('F j' ,$api_five_days->list[24]->dt);
$five_day = date('F j' ,$api_five_days->list[32]->dt);

$temp_one = (round($api_five_days->list[0]->main->temp - 273));
$temp_two = (round($api_five_days->list[8]->main->temp - 273));
$temp_three = (round($api_five_days->list[16]->main->temp - 273));
$temp_thour = (round($api_five_days->list[24]->main->temp - 273));
$temp_five = (round($api_five_days->list[32]->main->temp - 273));

$temp_feels_one = (round($api_five_days->list[0]->main->feels_like - 273));
$temp_feels_two = (round($api_five_days->list[8]->main->feels_like - 273));
$temp_feels_three = (round($api_five_days->list[16]->main->feels_like - 273));
$temp_feels_thour = (round($api_five_days->list[24]->main->feels_like - 273));
$temp_feels_five = (round($api_five_days->list[32]->main->feels_like - 273));
