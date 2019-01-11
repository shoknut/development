var ardoise = new Ardoise();
var colorPicker = new ColorPicker();

$(".size").on("click", function(){
	var valueSize = this.value;
	ardoise.pen.changeSize(valueSize);
})

$(".color").on("click", function(){
	if(ardoise.isPainting == false){
		var valueColor = this.value;
		ardoise.pen.changeColor(valueColor);
	}else{
		ardoise.canvas.style.backgroundColor = this.value;
	}
})

$("#clear").on("click", function(){
	ardoise.onClearArdoise();
});

$("#bucket").on("click", function(){
	ardoise.onClickBucket();
});
$("#gomme").on("click",function(){
	ardoise.isErasing = !ardoise.isErasing;
})