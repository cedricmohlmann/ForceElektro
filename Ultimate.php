<!DOCTYPE html>

<html lang="en">
<head>

    <title>Playing Ultimate</title>
	<?php include("Include/Head.php") ?>

	<script>
		$(document).ready(function(){
			$("#ultimateBTN").addClass("active");
			$(".headerImgTitle").html("About Ultimate");
			$("#HeaderImgChild").addClass("headerImgUltimate");
			$("#HeaderImgChild").html("<video autoplay muted loop class='UFvideo'> <source src='../Images/Ultimate_video.mp4' type='video/mp4'></video>");
		});
	</script>
	
</head>

<body>
	<div class="wrapper">
		<?php include('Include/Header.php')?>
		
		<div class="main ">
			<div class="mainLeft">

				<div class="mainContent secondFontHead">
					<div class="mainContentHead">About playing Ultimate Frisbee</div>

        				<div class="mainContentText mainTextColor">
        					Ultimate Frisbee is a fast-paced, non-contact team sport. It involves strategy, speed, skills and a lot of running.</br></br>

The goal of Ultimate frisbee is to catch the disc in the end zone of the opponent. This can be achieved by passing the disc around between you and your teammates. Walking with the disc is not allowed, you can only pivot around one foot after catching the disc. You have 10 seconds each time to throw the disc. Your defender will count them out loud. If the disc touches the ground or the other team catches or intercepts it, the defending team gains possession and will try to get the disc to the other side for a score.</br></br>

A remarkable thing about Ultimate frisbee is that there is no referee. The players need to call fouls and violations themselves. That’s why a good spirit and knowledge of the rules is very important in Ultimate frisbee. After each game, the spirit of the game is discussed with the opposing team in a so-called spirit circle.</br></br>

        				</div>
        				

				</div>
			</div>
			<div class="mainRight">
				<div class="mainSocial secondFontHead">
					<div class="mainContentHead">More information</div>
					<div class="mainSocialText mainTextColor">
						For more information, check out Ultimate on Wikipedia or Youtube.  
						
						
                        <a href="https://en.wikipedia.org/wiki/Ultimate_(sport)" class="noTextDec">
                            <div class="socialButton btnWiki">
                                <div class="dispTable fullWidth">
                                    <div class="dispCell vertMiddle">Wikipedia</div>
                                    <div class="dispCell vertMiddle floatR"><img class="vertMiddle" style="float:right" src="../Images/wikilogo.png" alt="Wiki" width="24" height="24"></div>
                                </div>
                            
                            </div>
                        </a>
                        
                       
                        <a href="https://www.youtube.com/watch?v=JQBawZfIT-A" class="noTextDec">
                            <div class="socialButton btnYT">
                                <div class="dispTable fullWidth">
                                    <div class="dispCell vertMiddle">Youtube</div>
                                    <div class="dispCell vertMiddle floatR"><img class="vertMiddle" style="float:right" src="../Images/YouTubeLogo.png" alt="YT" height="24"></div>
                                </div>
                            
                            </div>
                        </a>
                        
					</div>
				</div>
			</div>
		</div>
		<?php include ('Include/Footer.php'); ?>
	</div>
</body>

</html>