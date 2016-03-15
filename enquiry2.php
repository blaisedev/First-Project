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

<aside style="height:750px;">
<a href="mainmenu.html">Main Menu</a></li>
</aside>

<section>

<?php
$depCity=$_GET['DepartureCity'];
$flightDate=$_GET['FlightDate'];

error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to the database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("g00340837", $con); //tells which database that you want to work with



$result = mysql_query("SELECT FlightNumber, FlightDate, DepartureCity, DepartureTime, Destination, ArrivalTime, TotalSeats, SeatsAllocated, Cancelled, SeatPrice FROM flight WHERE DepartureCity = '".$depCity."'  and FlightDate = '".$flightDate."'");
			/*, AND flightDate = '".$flightDate."'" ); */
			//getting information from flight details
			

echo "<table border='1'>  
<tr> 
<th>Flight Number</th>
<th>Date</th>
<th>Departure City </th>
<th>Departure Time </th>
<th>Destination</th>
<th>Arrival Time </th>
<th>Total Seats  </th>
<th>Seats Allocated</th>
<th>Seat Price </th>
<th> Cancelled </th>

</tr>";

while($row = mysql_fetch_array($result)) //this creates a loop 
  {
  echo "<tr>";
  echo "<td>" . $row['FlightNumber'] . "</td>";
  echo "<td>" . $row['FlightDate'] . "</td>";
  echo "<td>" . $row['DepartureCity'] . "</td>";
   echo "<td>" . $row['DepartureTime'] . "</td>";
   echo "<td>" . $row['Destination'] . "</td>";
   echo "<td>" . $row['ArrivalTime'] . "</td>";
  echo "<td>" . $row['TotalSeats'] . "</td>";
  echo "<td>" . $row['SeatsAllocated'] . "</td>";
   echo "<td>" . $row['SeatPrice'] . "</td>";
   echo "<td>" . $row['Cancelled'] . "</td>";
   
  echo "</tr>";
  }
echo "</table>";

mysql_close($con); //closing connection
?> 
</section>
<aside style="height:750px; float:right;">
		<h2> Attention</h2>
		<p>Please fill in enquiry details for future reference.</p>
		<h2> Attention</h2>
	</aside>
	<article>
		<h2> Enquiry Details </h2>
		<form action="insert3.php"  method="post"style="display: inline; margin-left:100px;float: left;">
		
			Booking Steward:<br><input   type="text"  pattern="[A-Za-z\\s]*" title="Alphabet Only" maxlength="30" name="BookingSteward"required><br><br>
			
			Date:<br><input type="date" name="Date" value="dd/mm/yyyy" max="2015-12-02"><br><br>
		
			Time:<br><input type="time" name="Time"><br><br>
		
			Comments:<br><textarea name="Comment" rows=5 cols=50 wrap=virtual>
			</textarea>
			<br><input type="submit" value="Submit">
		</form>
		
	</article>
	




<footer> Air-Direct
</footer>
</body>
</html>