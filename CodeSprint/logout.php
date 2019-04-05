<?php
session_start();
$pagename="Log out"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
echo "<p> Thank you ".$_SESSION['fname']."   ".$_SESSION['lname'];
session_unset();
session_destroy();
echo "<P> You have successfully logged out";

include("footfile.html"); //include head layout
echo "</body>";
?>