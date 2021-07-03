var menuButton = document.getElementById("menuIco");
var menuA = false;

menuButton.addEventListener("click", function() {

	if(!menuA) {
		document.getElementById("menu").style.visibility = "visible";
		this.src = "img/menuCross.png";
		document.getElementById("body").style.overflow = "hidden";
		menuA = true;
	}else {
		document.getElementById("menu").style.visibility = "hidden";
		this.src = "img/menu.png";
		document.getElementById("body").style.overflow = "auto";
		menuA = false;
	}
	
});