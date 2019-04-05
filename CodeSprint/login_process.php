<?php
session_start(); 
include("db.php");
$pagename="Your Login Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$email = $_POST['mail'];
$password = $_POST['psw'];

if (!empty($email&&$password)){
	//create a $SQL variable and populate it with a SQL statement that retrieves product details 
    $SQL="select * from Users where userEmail='".$email."'"; 
	//$SQL2="INSERT INTO Users (userType,userFName,userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword) VALUES('C','Ann','Fransis','London','w123','0715601474','Ann123@gmail.com','')";
    //run SQL query for connected DB or exit and display error message 
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
	//$exeSQL2=mysqli_query($conn, $SQL2) or die (mysqli_error());
	$arrayu=mysqli_fetch_array($exeSQL);
	//$arrayu2=mysqli_fetch_array($exeSQL2);
	
	if (!($arrayu['userEmail']==$email)){
		echo "Email not recognised, login again";
		echo "<br>Go back to : <a href='login.php'>Log In</a>";
	}
	else {
		if (!($arrayu['userPassword']==$password)){
			echo "Password not recognised, login again";
			echo "<br>Go back to : <a href='login.php'>Log In</a>";
		}
		else{
			echo "Logged in successfully !!<br>";
			$_SESSION['userid']=$arrayu['userId'];
			$_SESSION['usertype']=$arrayu['userType'];
			$_SESSION['fname']=$arrayu['userFName'];
			$_SESSION['sname']=$arrayu['userSName'];
			echo "Hello,".$_SESSION['fname']." ".$_SESSION['sname'];
			if($arrayu['userType']=='A'){
				$_SESSION['usertype']='Administrator';
				echo "<br>You have successfully logged in as a QuizLet Administrator !";
				echo "<br>Continue shopping for : <a href='index.php'>Home Tech</a>";
			}
			
			if($arrayu['userType']=='C'){
				$_SESSION['usertype']='Customer';
				echo "<br>You have successfully logged in as a QuizLet Customer !";
				echo "<br>Continue shopping for : <a href='index.php'>Home Tech</a>";
			   
			}
			
			
			
			
		}
	}
}
else {
	echo "Both email and password fields need to be filled in<br>";
	echo "<br>Go back to : <a href='login.php'>Log In</a>";
}

/* echo "Entered Email : ".$email."<br>";
echo "Entered Password : ".$password; */

include("footfile.html"); //include head layout
echo "</body>";
?>
