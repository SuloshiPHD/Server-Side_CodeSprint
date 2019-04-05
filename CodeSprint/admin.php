<?php
$pagename="Admin Rights Have Been Granted And You May Do The Following"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

			echo "<form name='addquestions' action=addquestion.php method=post >";
            echo "<br>";
            echo "<br>";
            echo  "<input type='submit' name='addbtn' value='Add Questions'>";
			echo "</form>";	

            echo "<form name='editquestions' action=editquestion.php method=post >";
            echo "<br>";
            echo "<br>";
			echo  "<input type='submit' name='editbtn' value='Edit Questions'>";
            echo "</form>";	

            echo "<form name='logout' action=logout.php method=post >";
            echo "<br>";
            echo "<br>";
			echo  "<input type='submit' name='logoutbtn' value='Logout'>";
			echo "</form>";	
include("footfile.html"); //include head layout
echo "</body>";
?>