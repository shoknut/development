class ColorPicker{
	constructor(){
		this.canvas = document.getElementById("canvasPicker");
		this.context = this.canvas.getContext("2d");

		var gradient;

		gradient = this.context.createLinearGradient(0,0, this.canvas.width, 0);

		gradient.addColorStop(0, "rgb(255,0,0)");
		gradient.addColorStop(0.15, "rgb(255,0,255)");
		gradient.addColorStop(0.32, "rgb(0,0,255)");
		gradient.addColorStop(0.49, "rgb(0,255,255)");
		gradient.addColorStop(0.66, "rgb(0,255,0)");
		gradient.addColorStop(0.83, "rgb(255,255,0)");
		gradient.addColorStop(1, "rgb(255,0,0)");

		this.context.fillStyle = gradient;
		this.context.fillRect(0,0,this.canvas.width, this.canvas.height);

		this.canvas.addEventListener("click", this.getPixelData.bind(this));

		this.pickedColor = {red:0,green:0,blue:0};
	}
	// fonction appelée au clic sur le picker
	getPixelData(event){
		var x = event.offsetX;
		var y = event.offsetY;
		// me renvoie un tableau du pixel cliqué
		var pixel = this.context.getImageData(x,y,1,1);
		this.pickedColor.red = pixel.data[0];
		this.pickedColor.green = pixel.data[1];
		this.pickedColor.blue = pixel.data[2];

		ardoise.onPickedColorChosen(this.pickedColor);
	}

	getPickedColor(){
		return this.pickedColor;
	}
}