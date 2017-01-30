window.showDivisions = function(elementId) { 
   	var elements = document.getElementsByTagName("hideMeDivisions");
    	for (var i = 0; i < elements.length; i++)
       		elements[i].className = "hidden";
  
    		document.getElementById(elementId).className = "";
}

window.showSponsors = function(elementId) { 
   	var elements = document.getElementsByTagName("hideMeSponsors");
    	for (var i = 0; i < elements.length; i++)
       		elements[i].className = "hidden";
  
    		document.getElementById(elementId).className = "";
}