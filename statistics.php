<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Statistics </title>
			<meta http-equiv="content-type"
		content="text/html;charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="mystyle2.css">
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
	</head>
	<body>
	<header> Air-Direct
	<div style= "float: right;color: white;font-size:35px;border-style: solid;width: 7em;border-width: 5px;border-color: white;" id="txt"></div>
	<body onload="startTime()">
	</header>
	
	<aside style="height:750px;">
	<li><a href="mainmenu.html">Main Menu</a></li>
	</aside>
	<section>
	<h2> Passenger Statistics </h2>
		<?php
			error_reporting(E_ALL^E_DEPRECATED);
			$con = mysql_connect("localhost","root"); //connecting to the database
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
			  }

			mysql_select_db("g00340837", $con); //tells which database that you want to work with

			$result = mysql_query("SELECT * FROM passenger"); //getting information from emp table

			echo "<table border='1'>  
			<tr> 
			<th>Passenger ID</th>
			<th>Passport Number</th>
			<th>Title </th>
			<th>First Name </th>
			<th>Surname</th>
			<th>Address 1 </th>
			<th>Address 2</th>
			<th>Country </th>
			<th>Dob </th>
			<th>Phone No </th>
			<th>Email</th>
			</tr>";

			while($row = mysql_fetch_array($result)) //this creates a loop 
			  {
			  echo "<tr>";
			  echo "<td>" . $row['PassengerID'] . "</td>";
			  echo "<td>" . $row['PassportNumber'] . "</td>";
			  echo "<td>" . $row['Title'] . "</td>";
			  echo "<td>" . $row['FirstName'] . "</td>";
			   echo "<td>" . $row['Surname'] . "</td>";
			   echo "<td>" . $row['Address1'] . "</td>";
			  echo "<td>" . $row['Address2'] . "</td>";
			  echo "<td>" . $row['Country'] . "</td>";
			   echo "<td>" . $row['Dob'] . "</td>";
			   echo "<td>" . $row['PhoneNumber'] . "</td>";
			   echo "<td>" . $row['Email'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con); //closing connection
		?> 
	</section>
	<aside style="height: 750px; float:right;">
		<h2> Attention</h2>
		<p>Printable documents for future planning.<p>
		<h2> Attention</h2>
	</aside>
	<article>
	<h2> Flight Statistics </h2>
		<?php
			error_reporting(E_ALL^E_DEPRECATED);
			$con = mysql_connect("localhost","root"); //connecting to the database
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
			  }

			mysql_select_db("g00340837", $con); //tells which database that you want to work with

			$result = mysql_query("SELECT * FROM flight"); //getting information from emp table

			echo "<table border='1'>  
			<tr> 
			<th>Flight No</th>
			<th>Flight Date </th>
			<th>Departure Time </th>
			<th>Arrival Time</th>
			<th>Departure City </th>
			<th>Destination</th>
			<th>Total Seats</th>
			<th>Seats Allocated </th>
			<th>Seat Price </th>
			<th>Cancelled</th>
			</tr>";

			while($row = mysql_fetch_array($result)) //this creates a loop 
			  {
			  echo "<tr>";
			  echo "<td>" . $row['FlightNumber'] . "</td>";
			  echo "<td>" . $row['FlightDate'] . "</td>";
			  echo "<td>" . $row['DepartureTime'] . "</td>";
			   echo "<td>" . $row['ArrivalTime'] . "</td>";
			   echo "<td>" . $row['DepartureCity'] . "</td>";
			  echo "<td>" . $row['Destination'] . "</td>";
			  echo "<td>" . $row['TotalSeats'] . "</td>";
			   echo "<td>" . $row['SeatsAllocated'] . "</td>";
			   echo "<td>" . $row['SeatPrice'] . "</td>";
			   echo "<td>" . $row['Cancelled'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con); //closing connection
		?> 
	</article>
	
	<footer>Air-Direct</footer>