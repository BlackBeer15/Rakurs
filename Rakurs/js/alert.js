let html = document.getElementById('html')
let mesa = document.getElementById('myMessage');

function alert() {
	mesa.style.display = "flex";
	html.style.overflow = "hidden";
}

function closeAlert() {
	mesa.style.display = "none";
	html.style.overflow = "auto";
}