<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Enquiry </title>
			<meta http-equiv="content-type"
		content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="mystyle2.css">
		<script>
			
				function startTime() {
					var today = new Date();
					var h = today.getHours();
					var m = today.getMinutes();
					var s = today.getSeconds();
					m = checkTime(m);
					s = checkTime(s);
					document.getElementById('txt').innerHTML =
					h + ":" + m + ":" + s;
					var t = setTimeout(startTime, 500);
				}
				function checkTime(i) {
					if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
					return i;
				}

		</script>
		
		<style>
			i{
			display:inline;
			border: none;
		}
			
		}
		ul{
			float:left;
			width: 100%;
			border: none;
			
		}
		a{
			float: left;
			width: 7em;
			background-color: black;
			color: white;
			margin-left: 10px;
			font-size: 20px;
			margin-top:10px;
			border-style: solid;
			border-width: 5px;
			border-color: white;
			opacity: 0.8;
			text-decoration: none;
			text-align: center;
			
			}
		
		</style>
	</head>
	<body>
	<header> Air-Direct
	<div style= "float: right;color: white;font-size:35px;border-style: solid;width: 7em;border-width: 5px;border-color: white;" id="txt"></div>
	<body onload="startTime()">
	</header>
	
	<aside style="height:500px;">
	<a href="mainmenu.html">Main Menu</a></li>
	</aside>
	<section style="width: 400px;height: 400px;border: 4px solid red;margin-left: 250px;background: black;word-wrap: break-word;color:white;text-align: center;">
	<form action = "enquiry2.php" onsubmit = "return validateCity()" method="get">
	<br>
        Departure City:<br>
		<select style="margin-left:110px;float: left;"  name="DepartureCity" required>
			<option value="Dublin">Dublin</option>
			<option value="London">London</option>
		</select>
		<br>
		<br>
        Flight Date:<br>
		<input style="margin-left:110px;float: left;" type="date" max="2015-12-02" name="FlightDate" required >
		<br>
		<br>
        <input style="margin-left:170px;float: left;" type="submit" value="Submit" />

	</form>
	</section >
	<aside style="height: 500px;float:right;">
		<h2> Attention</h2>
		<p>Please fill in enquiry details for future reference.</p>
		<h2> Attention</h2>
	</aside>

	
	<footer>Air-Direct</footer>