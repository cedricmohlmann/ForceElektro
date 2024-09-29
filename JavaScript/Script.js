

$(document).ready(function () {
	setInterval(function () {
		$(".wrapper .backgroundImageOne").removeClass("backgroundImageOne");
	}, 3000);

	$("#slideshow > div:gt(0)").hide();
	setInterval(function () {
		$('#slideshow > div:first')
			.fadeOut(2000)
			.next()
			.fadeIn(2000)
			.end()
			.appendTo('#slideshow');
	}, 9000);

});

$(document).ready(function () {
	// $(".fadeIn2").hide(0).delay(500).fadeIn(1000);
	//$(".mainEvents").hide(0).delay(700).fadeIn(1000);
	//	$(".footerFade").hide(0).delay(800).fadeIn(1000);
	//	$(".fadeIn").hide(0).delay(100).fadeIn(500);

	$(".backgroundImageOne").hide(0).delay(500).fadeIn(500);
	$(this).delay(500).queue(function () {
		$(".backgroundImageIndex").height($(document).height());
		$(this).dequeue();

	});



});


