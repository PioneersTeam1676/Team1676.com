window.show = function(elementId) { 
   	var elements = document.getElementsByTagName("hideMeDivision");
    	for (var i = 0; i < elements.length; i++)
       		elements[i].className = "hidden";
  
    		document.getElementById(elementId).className = "";
}

window.show = function(elementId) { 
   	var elements = document.getElementsByTagName("hideMeSponsor");
    	for (var i = 0; i < elements.length; i++)
       		elements[i].className = "hidden";
  
    		document.getElementById(elementId).className = "";
}