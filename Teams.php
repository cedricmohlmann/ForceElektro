<!DOCTYPE html>

<html lang="en">
<head>

    <title>Teams</title>
	<?php include("Include/Head.php") ?>
	
	<script>
		$(document).ready(function(){
			$("#ultimateBTN").addClass("active");
			$(".headerImgTitle").html("Our Teams");
			$("#HeaderImgChild").addClass("headerImgTeams");
			$("#HeaderImgChild").css("background-position: center 43%");
		});
	</script>
	
</head>

<body>
	<div class="wrapper">
		<?php include('Include/Header.php')?>
		
		<div class="main ">
			<div class="mainLeft">

				<div class="mainContent secondFontHead ">
					<div class="mainContentHead">Teams at Force Elektro</div>
					<div class="mainContentText mainTextColor">
						 At Force Elektro, we have multiple teams on different levels. We strive to make teams in which everyone can find their spot. Being part of a competition team allows you to really get to know some of the great people that make up Force Elektro over team bonding activities or a nice dinner.

					</div>
					<div class="mainContentSubHead">Open 1</div>
                    <div class="mainContentText mainTextColor">
                        Open 1 is our highest-ranking team. They became Dutch national champions in the 2019/2020 season. They know the game in and out and boast a high-paced, intense playing style. If you think you have the disc skills and required speed and agility for the first team, you can show your worth at the FE1 tryouts at the beginning of the season.
                    </div>
                    
                    <div class="mainContentSubHead">Open 2 & 3</div>
                    <div class="mainContentText mainTextColor">
                        If you are still new to the sport or don’t have the time to commit to the many training hours of the first team, you can join one of the lower level teams. Their focus is on learning the game and gaining confidence on the Ultimate field. Enthusiastic coaches will help you on your way to become a great player!
                    </div>
                    
                    <div class="mainContentSubHead">Women 1</div>
                    <div class="mainContentText mainTextColor">
                        We also have a team especially for our ladies, called Force Elektro Women 1, also knows as "The Ladies". This team participates in the ladies competition.

                    </div>
                    
                    <div class="mainContentSubHead">Mixed 1</div>
                    <div class="mainContentText mainTextColor">
                        After the summer holiday, it’s time for the mixed season. Because most Forcies are away during the holiday practices, we usually only send one team to mixed competition. Points are played with three girls and four guys on the field or vice versa, and the other team must have the same number of guys and girls.
                    
                    

                    </div>

					
				</div>
				
			</div>
						<div class="mainRight">
				<?php include ('Include/MainRight.php'); ?>
		    </div>
		</div>
		<?php include ('Include/Footer.php'); ?>
	</div>
</body>

</html>