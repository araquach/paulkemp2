
$(document).ready(function() {
	
	$('#price_links').css({display:'block'});
	$('#price_link').css({display:'none'});
	$('#price_links a').click(function() {
		var url = $(this).attr('href');
		$('.price_panel').load(url + ' .price_panel');
		return false;	
	}); //end click
}); // end ready