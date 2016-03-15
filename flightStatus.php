<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Flight Status </title>
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
	<form action = "flightStatus2.php"  method="get" >
	<br>
        Flight Number:<br> 
		<select style="margin-left:110px;float: left;"  name="FlightNumber" required>
			<option value="D100">D100</option>
			<option value="D200">D200</option>
			<option value="L100">L100</option>
			<option value="L200">L200</option>
		</select>
		<br>
		<br>
        Flight Date:<br> 
		<input style="margin-left:110px;float: left;"  max="2015-12-02" type="date" name="FlightDate" required >
		<br>
		<br>
        <input style="margin-left:170px;float: left;" type="submit" value="Submit" />


</form>
	</section>
	<aside style="float:right; height:500px;">
	<h2> Attention</h2>
		<p>All fields required for query.</p>
	<h2> Attention</h2>
	</aside>

	
	<footer>Air-Direct</footer>