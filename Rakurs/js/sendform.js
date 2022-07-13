$(document).ready(function () {
	$('#myForm').submit(function () {
		var th = $(this);
		if (document.Form.name.value =='' || document.Form.email.value =='' || document.Form.message.value =='') {
			swal({
			  	title: "Опачки...",
			  	text: "Поля не должны быть пустыми!",
			  	icon: "error",
			  	button: "Ок",
			});
		} else {
			$.ajax({
				type: 'POST',
				url: '../php/sendform.php',
				data: $(this).serialize()
			}).done(function () {
				swal({
			  		title: "Отлично!",
			  		text: "Ваше сообщение было отправлено.",
			  		icon: "success",
			  		button: "Ок!",
				});
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
				document.getElementById('myMessage').style.display = "none";
				html.style.overflow = "auto";
			});
		}
		return false;
	});
});