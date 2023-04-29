<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Temperature Converter</title>
	<link rel="stylesheet" type="text/style" media="screen" href="style.css"/>
</head>
<style type="text/css">

body{			
			background-color: white;
			height: 100vh;
			font-size: 17px;
		}
.container{
			background-color: whitesmoke; 
			height: 610px; 
			width: 405px; 
			text-align: center;
			margin: 0 auto;
			margin-top: 150px;
			border: 1px solid black;
			border-radius: 8px;
			font-weight: none;
		}
h1{
			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
		}
h4{
			text-align: center;
		}

select {
			padding: 10px;
			width: 280px;
			border-radius: 3px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 16px;
		}

input[type=number] {
			padding: 10px;
			width: 300px;
			border-radius: 3px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 16px;
		}

input[type=submit] {
			background-color: black;
			color: white;
			padding: 10px 23px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			border: 1px solid black;
			float: center;

		}

input[type=submit]:hover {
			background-color: whitesmoke;
			margin: 0 auto;
			color: black;
			font-weight: bold;
			border: 1px solid black;
			padding: 10px 23px;
		}

</style>
<body>
		<div class="container">
		<h1>Temperature Converter</h1>
		
		<form method="post">

		<h4>Convert from:</h4>
		<select name="from_scale">
			<option value="Celsius">Celsius</option>
			<option value="Fahrenheit">Fahrenheit</option>
			<option value="Kelvin">Kelvin</option>
		</select>

		<h4>Convert to:</h4>
		<select name="to_scale">
			<option value="Celsius">Celsius</option>
			<option value="Fahrenheit">Fahrenheit</option>
			<option value="Kelvin">Kelvin</option>
		</select>
		<h4>Enter temperature to convert:</h4>
		<input type="number" name="temperature" required>
		<input type="submit" name="convert" value="Convert">
	
		</form>
<?php
	if (isset($_POST['convert'])) {
		$temperature = $_POST['temperature'];
		$from_scale = $_POST['from_scale'];
		$to_scale = $_POST['to_scale'];

		if ($from_scale == 'Celsius') {
			if ($to_scale == 'Fahrenheit') {
				$result = ($temperature * 9/5) + 32;
				echo "<div style='text-align:center'><p>$temperature Celsius is converted to $result Fahrenheit.</p>";
			} elseif ($to_scale == 'Kelvin') {
				$result = $temperature + 273.15;
				echo "<div style='text-align:center'><p>$temperature Celsius is converted to $result Kelvin.</p></div";
			} else {
				echo "<div style='text-align:center'><p>$temperature Celsius is converted to $temperature Celsius.</p></div";
			}
		} elseif ($from_scale == 'Fahrenheit') {
			if ($to_scale == 'Celsius') {
				$result = ($temperature - 32) * 5/9;
				echo "<div style='text-align:center'><p>$temperature Fahrenheit is converted to $result Celsius.</p></div";
			} elseif ($to_scale == 'Kelvin') {
				$result = ($temperature + 459.67) * 5/9;
				echo "<div style='text-align:center'><p>$temperature Fahrenheit is converted to $result Kelvin.</p></div";
			} else {
				echo "<div style='text-align:center'><p>$temperature Fahrenheit is converted to $temperature Fahrenheit.</p></div";
			}
		} else {
			if ($to_scale == 'Celsius') {
				$result = $temperature - 273.15;
				echo "<div style='text-align:center'><p>$temperature Kelvin is converted to $result Celsius.</p></div";
			} elseif ($to_scale == 'Fahrenheit') {
				$result = ($temperature * 9/5) - 459.67;
				echo "<div style='text-align:center'><p>$temperature Kelvin is converted to $result Fahrenheit.</p></div";
			} else {
				echo "<div style='text-align:center'><p>$temperature Kelvin is converted to $temperature Kelvin.</p></div";
			}
		}
	}
?>
</div>
</body>
</html>