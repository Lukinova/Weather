<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="now_forecast"></div>
		<div class="city_selection">
			<span class="city_selection">What city do you want to visit?</span>
			<form action="/index.php">
				<input type="text" name="city" autofocus="autofocus">
				<input type="submit" class="submit" value="Select"></input>
			</form>		
		</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$('form').on('submit', function () {
    $.get('/api.php', {'city': $('input[name="city"]').val()}).done(function(data){
       console.log(data);
       $('.container > .city_selection').slideToggle();
       $('.now_forecast').html(data);
       setTimeout(function(){$('.now_forecast').slideToggle();}, 1000);
    });
    return false;
});
$(document).ready(function() {
    $('input[name="city"]').focus();
});
</script>
</body>
</html>