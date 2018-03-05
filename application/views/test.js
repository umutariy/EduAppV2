
var x = document.getElementById("questions");
var forRadio = document.getElementById("choice");
var forText = document.getElementById("text_input")
var option = document.getElementById("option");
var text = document.getElementById("text");

function createQuestion() 
{
	document.getElementById("choice").style.display="none";
	document.getElementById("text_input").style.display="none";
	document.getElementById("questions").style.display="block";
}

function choice(option)
{
	forRadio.style.display="block";
}

function text_Input(text)
{
	forText.style.display="block";
}


