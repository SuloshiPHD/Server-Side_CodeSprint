<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'CodeSprintdb';
//create a DB connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) ;
//if the DB connection fails, display an error message and exit
if (!$conn)
{
 die('Could not connect: ' . mysqli_error($conn));
}
echo "Connected successfully<br>";
//select the database
mysqli_select_db($conn, $dbname);
?>