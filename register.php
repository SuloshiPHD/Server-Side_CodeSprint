<?php

session_start();
$pagename="Create an Account"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

	echo "<form action=register_process.php method=post>";  
			echo "<table style='border:0px'>"; 
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*First Name";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='text'  name='fname'>";
				echo"</td>";
				echo "</tr>"; 
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*Last Name";
				echo"</td>";
				echo "<td  style='border:0px' >"; 
				echo "<input type='text'  name='lname'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*Address";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='text'  name='address'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*PostCode";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='text'  name='postcode'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*Tel NO";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='text'  name='tel'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*Email Address";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='email'  name='email'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>"; 
				echo "*Password";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='password'  name='pwd'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>";
				echo "*Confirm password";
				echo"</td>";
				echo "<td  style='border:0px'>"; 
				echo "<input type='password'  name='conpwd'>";
				echo"</td>";
				echo "</tr>";
				
				echo "<tr>"; 
				echo "<td  style='border:0px'>";
				echo "<input type=submit value='Sign up'>";
				echo"</td>";
				echo "<td  style='border:0px'>";
				echo "<input type=submit value='Clear Form'>";
				echo"</td>";
				echo "</tr>";	 
			echo "</table>"; 
		echo "</form>";


include("footfile.html"); //include head layout
echo "</body>";
?>
