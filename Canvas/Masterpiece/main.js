$("#canvas").on("click", onclickCanvas);
var ctx = canvas.getContext("2d");

function onclickCanvas(event){
	
	
	var rand = Math.floor(Math.random()*(5-1)+1);
		
	var x = event.clientX;
	var y = event.clientY;
	
	
	if(rand == 1) {
		var cercle = new Path(x,y);
		cercle.circle();
	}
	else if(rand == 2){
		var square = new Path(x,y);
		square.square();
			
	}
	else if(rand == 3){
		var smiley = new Path(x,y);
		smiley.smiley();
		
	}
	else if(rand == 4){
		var image = new Path(x,y);
		image.image();
	}

}




