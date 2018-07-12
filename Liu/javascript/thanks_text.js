function changeText(){	
	if( document.getElementById('name') != null || document.getElementById('name') != "", 
		document.getElementById('company') != null || document.getElementById('company') != "",
		document.getElementById('mail') != null || document.getElementById('mail') != "",
		document.getElementById('message') != null || document.getElementById('message') != ""){
			document.getElementById('thanks').innerHTML = "Thank you for your proposal. It has been sent.";
		}	
	}