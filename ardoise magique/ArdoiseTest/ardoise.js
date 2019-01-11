class Ardoise{
	constructor(){
		this.canvas = document.getElementById("canvas");
		this.context = this.canvas.getContext("2d");
		this.currentPosition = {x:0,y:0};
		this.isDrawing = false;
		this.isPainting = false;
		this.isErasing = false;
		// encapsulation de Pen() dans ardoise
		this.pen = new Pen();
		this.canvas.addEventListener("mousemove", this.onDrawing.bind(this));
		// sans bind, arrow fonction, pas oublier les parentheses
		//this.canvas.addEventListener("mousemove", ()=>this.onDrawing())
		this.canvas.addEventListener("mousedown", this.onStartDrawing.bind(this));
		this.canvas.addEventListener("mouseup", this.onStopDrawing.bind(this));

	}
	onStartDrawing(event){
		this.isDrawing = true;
		// j'assigne la premiere position de mon tracé
		this.currentPosition.x = event.offsetX;
		this.currentPosition.y = event.offsetY;
	}

	onDrawing(event){
		if(this.isDrawing && this.isErasing == false){
			// commence un tracé
			this.context.beginPath();
			// on choisit le point de départ du tracé
			this.context.lineWidth = this.pen.size;
			this.context.strokeStyle = this.pen.color;
			this.context.moveTo(this.currentPosition.x, this.currentPosition.y);
			// On choisit le point d'arrivée du tracé
			this.context.lineTo(event.offsetX, event.offsetY);
			console.log(this.pen.size);
			// on ferme le tracé
			this.context.closePath();
			// on affiche le tracé
			this.context.stroke();
			// on remet la position de départ du tracé sur la position de la souris
			this.currentPosition.x = event.offsetX;
			this.currentPosition.y = event.offsetY;
		}else if(this.isDrawing && this.isErasing == true){
			this.context.clearRect(event.offsetX, event.offsetY,10,10);
		}
	}
	onStopDrawing(){
		this.isDrawing = false;
	}
	onClearArdoise(){
		this.context.clearRect(0,0, this.canvas.width, this.canvas.height);
	}
	onClickBucket(){
		// toggle boolean / interrupteur boolean
		this.isPainting = !this.isPainting;
	}
	onPickedColorChosen(colorAsRgb){
		var rgb = "rgb("+colorAsRgb.red+ ","+ colorAsRgb.green + "," + colorAsRgb.blue+")";
		this.pen.changeColor(rgb);
	}
}