<?php
session_start(); 
$pagename="Log In"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<form action=login_process.php method=post>";
echo "<table style='border: 0px'>";

echo "<tr><td style='border: 0px'>*Email : </td>";
echo "<td style='border: 0px'><input type='text' name='mail'></td></tr>";

echo "<tr><td style='border: 0px'>*Password : </td>";
echo "<td style='border: 0px'><input type='password' name='psw'></td></tr>";

echo "<tr><td style='border: 0px'><input type='submit' value= 'Log In'></td>";
echo "<td style='border: 0px'><input type='submit' value= 'Clear Form'></td></tr>";

echo "</table>";
echo "</form>";


include("footfile.html"); 
echo "</body>";
?>