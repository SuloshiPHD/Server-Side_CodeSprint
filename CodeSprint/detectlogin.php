<?php

if(isset($_SESSION['userid'])){
	echo "<h4 style='float: right'>".$_SESSION['fname']." ".$_SESSION['sname']." ".$_SESSION['usertype']." / No: ".$_SESSION['userid']."</h4>";
}
?>