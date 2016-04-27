function hover(element) {
    element.setAttribute('src', 'img/b32.png');
}
function unhover(element) {
    element.setAttribute('src', 'img/b3.jpg');
}

function mousedown()
{
	var snd = new Audio("AboutUs_button/mouse clic.mp3");
	snd.play();
	snd.currentTime=0;
}