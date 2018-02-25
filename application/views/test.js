function createQuestion() {
	var x = document.getElementById("form");
	var x = document.getElementById("content");
	var y = document.createElement("INPUT");
	y.setAttribute("type", "text");
	y.setAttribute("placeholder", "My input");

	x.appendChild(y);

	document.getElementById("add").style.display="none";
}

function test(){
	var x = document.getElementById("username");
	var x = document.getElementById("password");
}