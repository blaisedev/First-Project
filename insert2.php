<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("g00340837", $con); //tells which database that you want to work with

$sql="INSERT INTO passenger (PassportNumber,Title,FirstName,Surname,Address1,Address2,Country,Dob,PhoneNumber,Email)
VALUES
('$_POST[PassportNumber]','$_POST[Title]','$_POST[FirstName]','$_POST[Surname]','$_POST[Address1]','$_POST[Address2]','$_POST[Country]','$_POST[Dob]','$_POST[PhoneNumber]','$_POST[Email]')";

if (!mysql_query($sql,$con)) //this executes all the code above for the sql statement
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you for entering information needed";

mysql_close($con); //closing connection to database
?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysql_connect("localhost","root"); //connecting to database
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //if connection is unsuccessful it give a message 'could not connect'
  }

mysql_select_db("g00340837", $con); //tells which database that you want to work with

$sql="INSERT INTO payment (AmountPaid,Type)
VALUES
('$_POST[AmountPaid]','$_POST[Type]')";

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