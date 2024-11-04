$('img').each(function(){ //run this function on every img element
    var t = $(this); //create varaible with current element
	var w = this.naturalWidth; //get original width from image
	var h = this.naturalHeight; //get original height from image


	if(w > h){ //check if width is bigger than height -> add correct class to element.
        t.addClass('horizontal');
    } else { t.addClass('vertical');
		  
		   }
});