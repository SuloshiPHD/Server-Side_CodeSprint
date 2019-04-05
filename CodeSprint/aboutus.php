<!DOCTYPE html>
<html>
<head>
<title>GiftMe</title>
<link href="aboutus.css" rel="stylesheet">
</head>
<body>
<!--HTML document to define the layout of the header and the navigation bar-->



<?php
session_start();

$pagename="GiftMe: luxury flowers in lavish vases to truly unique plants and sparkling keepsakes."; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php"); 
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
?>

<section class="team">
			<div class="container"> 
			     <div class="row">
				 <h1>About Us</h1>
					 <h2>
					 Our Team</h2>
					 <br>
					 <p>
					    This is our team, a lot of smiling happy people who work hard to offer you the best product.
						We’re driven by the idea that the best work is born from diligence, craftsmanship and fun.
						 Innovative. Passionate. Committed.
						 
					 </p>
				 
				 </div>

                <div class="row mgt50px">
				    
				<div class="column">
						<div class="imgbox">
					      <img src="car1.jpg" width="100px" height="400px">
						</div>
						<div class="details">
							<h3>Inuri Ilangakoon<br><span>Associate Director</span></h3>
												
						</div>
						
						
					</div>
				    
					
					
					
					<div class="column">
					
					<div class="imgbox">
					       <img src="Sam.jpg" width="100px" height="400px">
						</div>
						<div class="details">
							<h3>Samasha Nayananthi<br><span>QA Engineer </span></h3>
								
                        </div>
					
					</div>
				    
					
					
					
					
					<div class="column">
					
					<div class="imgbox">
					       <img src="afk.png" width="100px" height="400px">
						</div>
						<div class="details">
							<h3>Prashan Bastiansz<br><span>Web Designer </span></h3>

						</div>
						
					
					</div>
	

					
					<div class="column">
					
					<div class="imgbox">
					      <img src="dun.jpg" width="100px" height="400px">
                    </div>
						<div class="details">
							<h3>Duneesha Suloshini<br><span>Finance Director </span></h3>

						</div>

					</div>

					 <div style="clear : both;"></div>
	             </div>
				 

				 
				</div>

		</section>
		</body>
</html>
<?php
echo "<p>Your flowers will be hand-delivered that same day! Choose from our collection of Florist Delivered
 flower arrangements, plants, gift baskets, balloons, or our other signature items, all designed to deliver a 
 smile today! .<br><br>";
include("footfile.html"); //include head layout



echo "</body>";

?>