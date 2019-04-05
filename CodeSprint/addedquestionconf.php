<?php
$pagename="Admin"; //Create and populate a variable called $pagename
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

            echo " You selected to add a question from the subject : " , $subjname = $_POST['subjname'];
            echo "<br>";
           echo "Your new question :" , $questadded = $_POST['questadded'];
           echo "<br>";
           echo " was added to the system with the answer :" , $answer = $_POST['answer'];
			echo "</form>";	
include("footfile.html"); //include head layout
echo "</body>";
?>