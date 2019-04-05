<?php
$pagename="Admin"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$subjname= $_POST['subjname'];
$questadded = $_POST['questadded'];
$answer= $_POST['answer'];


if (!empty($subjname||$questadded||$answer)){


    $SQL="INSERT INTO questiontbl (Subject,Question,Answer)
    VALUES('".$subjname."','".$questadded."','".$answer."')"; 
    //run SQL query for connected DB or exit and display error message 
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());  
    
    $errNo = mysqli_errno($conn);
    if ($errNo == 0){
        echo "successfully entered the new question"; 
    }
    if($errNo != 0){
      if($errNo = 1062){
        echo " The uniqueness of the question has been breached";
        echo "<br><a href='addquestion.php'>Go Back</a>";
      }
      if ($errNo == 1064){
        echo "Illegal characters have been entered such as apostrophes [ ' ] and backslashes [ \ ]";
        echo "<br><a href='addquestion.php'>Go Back</a>";
      }
      if($errNo == 1054){
        echo "Illegal characters have been entered in the fields that are expecting numerical values";
        echo "<br><a href='addquestion.php'>Go Back</a>";
      }
    }
}
else{
echo "Fill all the mandatory fields !!";
echo "<br><a href='addquestion.php'>Go Back</a>";
}

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