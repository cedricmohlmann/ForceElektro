<!DOCTYPE html>

<html lang="en">
<head>
	
	<title>About</title>
	<?php include("Include/Head.php") ?>

	
	<script>
		$(document).ready(function(){
			$("#aboutBTN").addClass("active");
			$(".headerImgTitle").html("About Force Elektro");
			$("#HeaderImgChild").addClass("headerImgSrcAbout");
		});
	</script>
	
</head>

<body>
	<div class="wrapper">
		<?php include('Include/Header.php')?>
		
		<div class="main ">
			<div class="mainLeft">

				<div class="mainContent secondFontHead ">
				    
					<div class="mainContentHead">Who are we?</div>
					<div class="mainContentText mainTextColor">
						Founded in 1993, Force Elektro is the student Ultimate Frisbee club of Delft. We offer Ultimate Frisbee on all levels, from recreational to national team players. No matter your current level, you're welcome at Force Elektro to play Ultimate Frisbee.
					</div>
					<div class="mainContentHead">What do we do?</div>
					<div class="mainContentText mainTextColor">
						Force Elektro has several teams participating in the national Ultimate Frisbee competition. We also send teams to various national and international tournaments and we host our own tournament <a style="color: #424242;" href="http://rising-high.nl" target="_blank">Rising High</a> every year. Next to that, we organise various beginner leagues. We offer plenty of opportunities to play Ultimate Frisbee.
                            </br></br>
                        Force Elektro isn’t just about Ultimate. We also organise lots of great activities, so if you are looking to make new friends next to playing Ultimate Frisbee, Force Elektro is the place for you.
                            </br></br>
                       <!-- Our articles of association can be found by using this <a style="color: #424242;" href="FE Articles of Association - NL.pdf" download>link.</a> -->

					</div>
				</div>
			</div>
			<div class="mainRight">
				<?php include ('Include/MainRight.php'); ?>
		    </div>
		<?php include ('Include/Footer.php'); ?>
	</div>
</body>

</html>