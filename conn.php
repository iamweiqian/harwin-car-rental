<?php
/*
 *fail untuk connection dengan database
 *database kursus online
 
 $host="localhost"; 
$username="root"; 
$password="12345678"; 
$db_name="car_rental"; 

 */
 
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="car_rental"; 

$db_conn = mysql_connect($host, $username, $password) or die("Unable to connect to MySQL");


$selected=mysql_select_db("car_rental",$db_conn)
or die("Could not select database"); 

?>