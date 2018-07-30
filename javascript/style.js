	function layoutHandler(){
		var styleLink = document.getElementById("pagestyle");
		if(window.innerWidth < 900){
			styleLink.setAttribute("href","style/mobile.css");
		}else {
			styleLink.setAttribute("href", "style/style.css");		
	}
	}
	window.onresize = layoutHandler;
	layoutHandler();
