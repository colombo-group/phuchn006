function menu(e) {
	// body...
	 var evt = e ? e:window.event;
 	if (evt.stopPropagation)    
 		evt.stopPropagation();
	document.getElementById('menu').style.display = "block";
}
function bodyClick(){
	document.getElementById('menu').style.display = "none";
}