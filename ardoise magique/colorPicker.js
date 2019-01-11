class ColorPicker{
	constructor(){
		this.canvasColorPicker = document.getElementById("colorPicker");
		this.ctx = this.canvasColorPicker.getContext("2d");

		this.gradient = this.ctx.createLinearGradient(255,0,255,255);
		this.gradient.addColorStop(0,"#ff0000");     // Départ
		this.gradient.addColorStop(0.1,"#ff8000"); // Intermédiaire
		this.gradient.addColorStop(0.2,"#fff000"); // Intermédiaire
		this.gradient.addColorStop(0.3,"#80ff00"); // Intermédiaire
		this.gradient.addColorStop(0.4,"#00ff00"); // Intermédiaire
		this.gradient.addColorStop(0.45,"#00ff80"); // Intermédiaire
		this.gradient.addColorStop(0.5,"#00ffff"); // Intermédiaire
		this.gradient.addColorStop(0.6,"#0080ff"); // Intermédiaire
		this.gradient.addColorStop(0.7,"#0000ff"); // Intermédiaire
		this.gradient.addColorStop(0.8,"#7f00ff"); // Intermédiaire
		this.gradient.addColorStop(0.9,"#ff00ff"); // Intermédiaire
		this.gradient.addColorStop(0.95,"#c0c0c0"); // Intermédiaire
		this.gradient.addColorStop(0.99,"#808080");    // Arrivée

		this.ctx.fillStyle = this.gradient;            // Affectation au remplissage
		this.ctx.fillRect(0,0,this.canvasColorPicker.width,this.canvasColorPicker.height);

		this.dropper = $("#dropper");
		this.dropper.toggle("click", this.onClickDropper.bind(this));

	}
	// fonction d'écoute click
	getColorPixel(event){
		// utilise this.ctx.getImageData(x,y,1,1)
		// cela va te retourner un tableau
		// dans ce tableau, seront présent les valeurs RGB
		// data[r:75, g:75, b:78, a:1]
		// grace a ce tableau
		// construit une chaine rgb()
		// envoye la couleur rgb a pen.changeColor()
	}

	onClickDropper(){
		this.dropper = toggle();
	}

}