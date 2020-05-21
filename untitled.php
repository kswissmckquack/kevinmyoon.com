<?php 
$username = "kevyoon123"; 
$password = "kevyoon123"; 
$hostname = "kevyoon123.cgbrfct09n49.us-east-1.rds.amazonaws.com"; 
$dbname = "kevyoon123";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL"); 
echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>"; 
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again."); 
?>