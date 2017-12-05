$(document).ready(function() {
	var url = 'localhost/user_futsal';
	$.ajax({
		url: 'api/read_home.php',
		type: 'json',
		dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: {param1: 'value1'},
	})
	.done(function(data) {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});