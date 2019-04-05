<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="mystylesheet.css">
<title>Welcome</title>
 <style>
img{
	width:20%;
	height:25%;
	margin-left:500px;
	margin-top:-140px;
}
 /* styling the pictures in the slideshow */
 .slides{ 
 margin-top:20px;
margin-left:30px;
 display:none;
 width: 90%;
 height : 500px;
 border-radius:50px;
}

.slidesContainer{
 padding:20px;
  max-width: 1000px;
  position: relative;
  margin: auto;
}


</style>
</head>

<body>
<?php
session_start();
include ("headfile.html");
?>

<div class="slidesContainer">
    <img class="slides" src="slideshow/image1.jpg" >
    <img class="slides" src="slideshow/image2.jpg" >
    <img class="slides" src="slideshow/image3.jpg" >
    <img class="slides" src="slideshow/image4.jpg" >
    <img class="slides" src="slideshow/image5.jpg" >
    <img class="slides" src="slideshow/image6.jpg" >
    <img class="slides" src="slideshow/image7.jpg" >
</div>


<script>
    var index = 0; /* give a number to the pictures in the slideshow */
    slideShow();  /* calling the slideshow function */

    function slideShow(){     /* function to move pictures like a slideshow */
    var i;
    var x = document.getElementsByClassName("slides");   /* assigning the pictures to a variable */
    for (i = 0; i < x.length; i++) {  /* loop to iterate through the images */
       x[i].style.display = "none";
    }
    index++;
    if (index > x.length) {
    index = 1
    }
    x[index-1].style.display = "block";
    setTimeout(slideShow, 4000);  /* move the picture after 4 mins */
    }
</script>
<?php
include("footfile.html");
?>
</body>
</html>
