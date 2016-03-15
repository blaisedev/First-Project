<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("g00340837", $con); //tells which database that you want to work with

$sql="INSERT INTO logged_calls (BookingSteward,Date,Time,Comment)
VALUES
('$_POST[BookingSteward]','$_POST[Date]','$_POST[Time]','$_POST[Comment]')";

if (!mysql_query($sql,$con)) //this executes all the code above for the sql statement
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you for entering information needed";

mysql_close($con); //closing connection to database
?> 
<?php
  header("Location: " . $_SERVER["HTTP_REFERER"]);
?>