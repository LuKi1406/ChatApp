<?php




$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "Database"; 


$link = mysqli_connect("$dbhost" , "$dbuser" , "$dbpass","$dbname");
$db = mysqli_select_db($link, $dbname);
?>