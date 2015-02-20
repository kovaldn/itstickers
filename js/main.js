$(document).ready(function() {
	$('.jq-photoline-switcher').eq(0).on('click', function(event) {
		event.preventDefault();
		if($('#jq-photolist1').css('display') == 'none') {
			$('#jq-photolist2').fadeOut("fast", function() {
				$('#jq-photolist1').fadeIn("fast");	
			});
		}
	});

	$('.jq-photoline-switcher').eq(1).on('click', function(event) {
		event.preventDefault();
		if($('#jq-photolist2').css('display') == 'none') {
			$('#jq-photolist1').fadeOut("fast", function(){
				$('#jq-photolist2').fadeIn("fast");
			});
		}
	});
});