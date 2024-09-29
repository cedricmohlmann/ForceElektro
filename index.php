<!DOCTYPE html>

<html lang="en">

<head>

	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://apis.google.com/js/api.js"></script>
	<?php include("Include/Head.php") ?>

</head>


<body onload="loadClient()">
	<?php include('Include/Sidenav.php') ?>
	
	<!-- Loadscreen animation -->
	<div class="LoadScreen">
		<img class="rotate" src="Images\FE logo white.svg" alt="Loading">
	</div>
	
	<div class="mainWrapper" style="display: none;">


		<!-- Images in stylesheet -->
		<div id="slideshow">
			<div class="backgroundImageOne"></div>
			<div class="backgroundImageTwo"></div>
			<div class="backgroundImageThree"></div>
		</div>

		<!-- <div id="test" style="background-image: url(/Images/Index-Slide-Show/Image_Mike_Throw.jpg)"><div> -->

		<div class="wrapper">
			<div class="header shadow fadeIn">
				<div class="headerWrapper">
					<div class="menuBtn" onclick="openNav()">&#8801;</div>
					<div class="logoTitle"><a class="noTextDec" href="">
							<div class="headerImageClass">
								<img src="Images/FE logo white.svg" class="logo">
							</div>
							<div class="headerTitle">

								Force Elektro
							</div>
						</a>
					</div>
					<div class="nav">
						<div class="navMenu secondFontHead">
							<div class="dropdown">
								<a class="noLink linkBlock" href="About"><button class="link">About </button></a>
								<div class="dropdown-content">
									<a href="About">Force Elektro</a> <!-- <a href="#">Sponsors</a> -->
									<a href="About_Board">Board</a>
									<a href="Committees">Committees</a>
									<a href="Special_Force">Special Force Award</a>
									<a href="Member">Becoming a member</a>
									<a href="Sponsors">Sponsors</a>
									<a href="Social_Safety">Social Safety</a>
								</div>
							</div>
							<div class="dropdown">
								<a class="noLink linkBlock" href="Ultimate"><button id="ultimateBTN" class="link">PLaying Ultimate </button></a>
								<div class="dropdown-content marginLeft">
									<a href="Ultimate">About Ultimate</a>
									<a href="Practice">Practice</a>
									<a href="Teams">Teams</a>
								</div>
							</div>
							<div class="dropdown">
								<a class="noLink linkBlock" href="Events"><button id="newsBTN" class="link">Events </button></a>
								<div class="dropdown-content">
									<a href="Events">Events</a>
									<a href="http://rising-high.nl">Rising High</a>
									<a href="Randstad">Randstad</a>
								</div>
							</div>
							<div class="dropdown">
								<a class="noLink linkBlock" href="Clinics"><button id="clinicBTN" class="link">Clinics </button></a>
							</div>
							<div class="dropdown">
								<a class="noLink linkBlock" href="Contact"><button id="contactBTN" class="link">Contact </button></a>
							</div>
							<!--<a href="" class="link"><div id="playUlt" class="navTab">Playing Ultimate</div></a> Training/Playing ultimate; een / is niet erg net er tussen
							<a href="" class="link"><div id="news" class="navTab">News</div></a>  Zou het gewoon News noemen, same story met de / 
							<a href="" class="link"><div id="clincs" class="navTab">Clincs</div></a>
							<a href="" class="link"><div id="contact" class="navTab">Contact</div></a>-->
						</div>
					</div>
				</div>
			</div>

			<div>
				<div class="mainHome">
					<div class="dispTable fullWidth">
						<div style="width:50%;" class="dispCell">
							<!-- maybe remove the width after owee is done?-->
							<div class="mainTitle fadeIn2">
								Delft <br> Ultimate <br> Frisbee Club <br> Force Elektro

							</div>
							<div style="margin-top:25px;font-size:22px;" class="mainNewsMobile mainNews">
								<div> National champions 2019 - Force Elektro 1</div>
								</br>
								Force Elektro will be giving introduction practices that are open to anybody!</br>
                                Questions? Send us an <a style="color:white" href="mailto:board@force-elektro.nl" target="_top">email</a> or a DM on our <a style="color:white" href='https://www.instagram.com/force.elektro/'>Instagram</a>.
								</br></br>
								Date and times: <a style="color:white" href='Practice'>click here</a>
							</div>
							<div class="mainEvents">
								<div class="mainEventsContent">
									<div class="mainEventsHead primFontHead">Upcoming events</div>

									<pre id="preMainEventsContent"></pre>
								</div>
							</div>
						</div>
						<div class="dispCell mainNews">
							<div> National champions 2019 - Force Elektro 1</div>
							</br>
							    Force Elektro will be giving introduction practices that are open to anybody!</br>
                                Questions? Send us an <a style="color:white" href="mailto:board@force-elektro.nl" target="_top">email</a> or a DM on our <a style="color:white" href='https://www.instagram.com/force.elektro/'>Instagram</a>.
								</br></br>
								Date and times: <a style="color:white" href='Practice'>click here</a>
						</div>
					</div>

				</div>
			</div>
			<div class="footer footerFade">
				<div class="indexFooterWrapper">
					<div class="indexFooterLeft">
						<div class="footerLeftContent">
							<div class="dispTable">
								<div class="jOrL borderRight"><a class="noTextDec" href='https://pr01.allunited.nl/club.php?transh=e235bd44f0be1a3e0ae27d703769dde5&statustempcode=1'>Signing up</a></div>
								<div class="jOrL"><a class="noTextDec" href='Signoff'>Signing off</a></div>
							</div>
						</div>
					</div>

					<div class="footerRight">
						<div class="footerRightContent">
							<a class="socialLogo" href="https://www.flickr.com/photos/160565989@N03/albums"><img src="Images/flickerwhite.png" alt="Flickr" width="" height="18"></a>
							<a class="socialLogo" href="https://www.instagram.com/force.elektro/"><img src="../Images/Instagram_Glyph_White.svg" alt="Instagram" width="24" height="24"></a>
							<a class="socialLogo" href="https://www.facebook.com/ForceElektro/"><img src="Images/Flogo.svg" alt="Facebook" width="24" height="24"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	</div>
</body>

</html>

<script>
	var src = $('.backgroundImageOne').css('background-image');
	var url = src.match(/\((.*?)\)/)[1].replace(/('|")/g, '');


	$("body").css({
		backgroundColor: "#424242"
	});
	var img = new Image();
	img.onload = function() { //fade out if loaded
		
		$(".mainWrapper").delay(100).fadeIn(2000);
		$(".LoadScreen").delay(100).fadeOut(2000);
		$(".LoadScreen").promise().done(function() {
			$("body").css({
				backgroundColor: "#424242"
			});
		});
	}
	img.src = url;
	if (img.complete) img.onload();
</script>