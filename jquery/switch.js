$(document).ready(function() {
	$(".ios-switch").change(function() {
		var pin = $(this).attr("rowid");
		$.ajax ({
			type: 'GET',
			url: './switch.php?pin='+pin,
			success: function(response){
			}
		});
		
	});
});
