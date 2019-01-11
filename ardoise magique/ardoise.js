class Ardoise{
	constructor(){
		this.pen = new Pen();

		this.canvas = document.getElementById("canvas");
		this.eraser = document.getElementById("eraser");
		this.thickness = $(".thickness");
		this.color = $(".color");

		this.context = this.canvas.getContext("2d");
		this.currentPosition = {x:0,y:0};
		this.isDrawing = false;

		
		this.canvas.addEventListener("mousemove", this.onDrawing.bind(this));
		// sans bind, arrow fonction, pas oublier les parentheses
		//this.canvas.addEventListener("mousemove", ()=>this.onDrawing())
		this.canvas.addEventListener("mousedown", this.onStartDrawing.bind(this));
		this.canvas.addEventListener("mouseup", this.onStopDrawing.bind(this));
		this.eraser.addEventListener("click", this.errasing.bind(this));
		this.thickness.on("click", this.onClickSize.bind(this));
		this.color.on("click", this.onClickColor.bind(this));
		
	}
	onStartDrawing(event){
		this.isDrawing = true;
		// j'assigne la premiere position de mon tracé	
		this.currentPosition.x = event.clientX - this.offsetLeft;
		this.currentPosition.y = event.clientY - this.offsetTop;
		
	}

	onDrawing(event){
		if(this.isDrawing){
			// commence un tracé		
			this.context.beginPath();

			this.context.lineWidth = this.pen.size;
			this.context.strokeStyle = this.pen.color;
			// on choisit le point de départ du tracé		
			this.context.moveTo(this.currentPosition.x, this.currentPosition.y);
			// On choisit le point d'arrivé du tracé		
			this.context.lineTo(event.clientX, event.clientY);
			// on ferme le tracé		
			this.context.closePath();
			// on affiche le tracé	
			this.context.stroke();
			// on remet la position de départ du tracé la position de la souris
			this.currentPosition.x = event.clientX;
			this.currentPosition.y = event.clientY;
		}
		
		
	}

	onStopDrawing(event){
		this.isDrawing = false;
	}

	errasing(){
		this.context.clearRect(0, 0, this.context.canvas.width, this.context.canvas.height);
					
	}

	onClickSize(event){
		
		var size = event.target;
		this.pen.setSize(size.value);
		
	}

	onClickColor(event){
		var color = event.target;
		this.pen.setColor(color.value);
		
	}
}	