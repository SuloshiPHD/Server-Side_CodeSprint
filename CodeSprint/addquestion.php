<?php
$pagename="Add Questions"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<P> You have decided to add some questions!";

echo "<br>";
echo "<br>";


echo "<table style='border:2px' margin='top:10px' >";
			echo "<form name='addproduct' action=addedquestionconf.php method=post >";

			echo "<tr>";
			echo "<td>";
			echo "*Subject Name";
			echo"</td>";
			echo "<td >";
			echo "<input type='text' name='subjname' placeholder='Subject Name'  ";
			
			echo "</td>";
			echo "</tr>";


			echo "<tr>";
			echo "<td >";
			echo "Question to be Added";
			echo"</td>";
			echo "<td >";
			echo "<input type='text'  name='questadded' placeholder='Question to be Added '";
			echo "</td>";
			echo "</tr>";
			echo "<br>";


			echo "<tr>";
			echo "<td >";
			echo "Answer";
			echo"</td>";
				
			echo "<td >";
			echo "<input type='text' name='answer' placeholder='Answer'";
			echo "</td>";
			echo "</tr>";
			echo "<br>";


		
			
			
			echo "<tr>";
            echo "</table>";
            echo "<br>";
            echo "<br>";

			echo  "<input type='submit' name='addbtn' value='Add Question'>";
			
			echo "</form>";	
			


include("footfile.html"); //include head layout
echo "</body>";
?>

