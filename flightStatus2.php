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
	
	<aside style="height:750px;">
	<a href="mainmenu.html">Main Menu</a></li>
	</aside>
	<section>
		<?php
			$flightNumber=$_GET['FlightNumber'];
			$flightDate=$_GET['FlightDate'];

			error_reporting(E_ALL^E_DEPRECATED);
			$con = mysql_connect("localhost","root"); //connecting to the database
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
			  }

			mysql_select_db("g00340837", $con); //tells which database that you want to work with



			$result = mysql_query("SELECT ReservationNumber, PassengerID, FlightNumber, FlightDate, ReservationDate, ReceiptGenerated, BoardingPass, Cancelled  FROM reservation WHERE FlightNumber = '".$flightNumber."'  and FlightDate = '".$flightDate."'");
						/*, AND flightDate = '".$flightDate."'" ); */
						//getting information from flight details
						

			echo "<table border='1'>  
			<tr> 
			<th>ReservationNumber</th>
			<th>Passenger-ID</th>
			<th>FlightNumber </th>
			<th>FlightDate </th>
			<th>ReservationDate</th>
			<th>ReceiptGenerated </th>
			<th>BoardingPass</th>
			<th>Cancelled</th>

			</tr>";


			while($row = mysql_fetch_array($result)) //this creates a loop 
			  {
			  echo "<tr>";
			  echo "<td>" . $row['ReservationNumber'] . "</td>";
			  echo "<td>" . $row['PassengerID'] . "</td>";
			  echo "<td>" . $row['FlightNumber'] . "</td>";
			   echo "<td>" . $row['FlightDate'] . "</td>";
			   echo "<td>" . $row['ReservationDate'] . "</td>";
			   echo "<td>" . $row['ReceiptGenerated'] . "</td>";
			  echo "<td>" . $row['BoardingPass'] . "</td>";
			  echo "<td>" . $row['Cancelled'] . "</td>";
			   
			   
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con); //closing connection
		?> 
	</section>
	
	<aside style="height:750px;float:right;">
	<h2> Attention</h2>
		<p>Please fill in all fields.</p>
	<h2> Attention</h2>
	</aside>
	
	<article>
	<form style="margin: 20px;margin-left:40px;float: left;">
				
			
		<form style="margin: 20px;margin-left:40px;float: left;">
			Receipt Generated:<br>
			<input list="Receipt" name="ReceiptGenerated">
			<datalist id="Receipt">
			<option value="1">
			<option value="0">
			</datalist>
		</form>
		<form style="margin: 20px;margin-left:40px;float: left;">
				Boarding Pass:<br>
				<input list="BoardingPass" name="BoardingPass">
				<datalist id="BoardingPass">
				<option value="1">
				<option value="0">
				</datalist>
		</form>
		
		<form style="margin: 20px;margin-left:40px;float: left;">
			<br><input type="submit" value="Submit">
		</form>
	
	</article>
	
	
	
	<footer>Air-Direct</footer>