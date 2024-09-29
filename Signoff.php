<!DOCTYPE html>

<html lang="en">
<head>

    <title>Signing off</title>
	<?php include("Include/Head.php") ?>
	
	<script>
		$(document).ready(function(){
			$("#aboutBTN").addClass("active");
			$(".headerImgTitle").html("Signing off");
			$("#HeaderImgChild").addClass("headerImgSrcMember");
		});
	</script>
	
</head>

<body>
	<div class="wrapper">
		<?php include('Include/Header.php')?>
		
		<div class="main ">
			<div class="mainLeft">

				<div class="mainContent secondFontHead ">
					<div class="mainContentHead">Signing off</div>
					<div class="mainContentText mainTextColor">
					    We are sad to see you go, but if you want to sign off please send an email to <a style="color: #424242;" href="mailto:secretary@force-elektro.nl" target="_top">secretary@force-elektro.nl</a>. </br>
					    </br>
					    We hope you had a great time being a Forcie and we hope to see you again!

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