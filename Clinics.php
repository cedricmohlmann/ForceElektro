<!DOCTYPE html>

<html lang="en">

<head>

	<title>Clinics</title>
	<?php include("Include/Head.php") ?>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    
	<script>
		$(document).ready(function() {
			$("#clinicBTN").addClass("active");
			$(".headerImgTitle").html("Clinics");
			$("#HeaderImgChild").addClass("headerImgClinic");
		});
	</script>

</head>

<body>
	<div class="wrapper">
		<?php include('Include/Header.php') ?>

		<div class="main ">
			<div class="mainLeft">

				<div class="mainContent secondFontHead ">
					<div class="mainContentHead">Clinics</div>
					<div class="mainContentText mainTextColor">
						Want to do an activity that’s fun and energetic, yet different from what you’re used to? Then try an Ultimate Frisbee clinic!<br><br>

						Force Elektro offers Ultimate Frisbee clinics, given by experienced Ultimate Frisbee trainers. For a small fee, we send over a few of our instructors, who will guide you and your friends/colleagues through the fun and excitement of learning and experiencing a new sport.<br><br>

						Check the following table for rates:
						<br><br>

						<table>
                            <tr>
                                <th>Participants/Duration</th>
                                <th>1 hour</th>
                                <th>1.5 hours</th>
                                <th>2 hours</th>
                            </tr>
                            <tr>
                                <td>1-20</td>
                                <td>€75</td>
                                <td>€100</td>
                                <td>€125</td>
                            </tr>
                            <tr>
                                <td>21-40</td>
                                <td>€150</td>
                                <td>€200</td>
                                <td>€250</td>
                            </tr>
                            <tr>
                                <td>41-60</td>
                                <td>€225</td>
                                <td>€300</td>
                                <td>€375</td>
                            </tr>
                        </table>
                        <br><br>

						We bring our own materials. We can take care of all materials required for the clinic. Participants just need to bring shoes and attire fit to do sports in.<br><br>

						Fields need to be arranged. Fields are not included in the clinic price. In fact, currently we cannot provide fields, so you have to do that yourself. (Tip: try contacting X TU Delft.) The fields need to be in or near Delft otherwise additional travel fees might apply.<br><br>

						Interested? Or have any questions? Feel free to contact us via <a style="color: #424242;" href="mailto:board@force-elektro.nl" target="_top">board@force-elektro.nl</a><br><br>.
					</div>

				</div>
			</div>
			<div class="mainRight">
				<?php include('Include/MainRight.php'); ?>
			</div>
			<?php include('Include/Footer.php'); ?>
		</div>
</body>

</html>