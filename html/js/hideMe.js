window.show = function(elementId) { 
   	var elements = document.getElementsByTagName("hideMe");
    	for (var i = 0; i < elements.length; i++)
       		elements[i].className = "hidden";
  
    		document.getElementById(elementId).className = "";
}