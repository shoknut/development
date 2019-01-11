class Path{
	constructor(x,y){
		this.x = x;
		this.y = y;
		this.r = Math.floor((Math.random()* (256-1)+1));
		this.g = Math.floor((Math.random()* (256-1)+1));
		this.b = Math.floor((Math.random()* (256-1)+1));
		this.opacity = (Math.random()* (1-0.1)+0.1);
		this.cssColor = 'rgb(' + this.r +', ' + this.g + ',' + this.b + this.opacity +')';
		this.size = Math.floor(Math.random()*(100-2)+2);
		this.eye = Math.floor(Math.random()*(20-2)+2);
		this.mouth = Math.floor(Math.random()*(60-2)+2);
	}
	radius(){
		return this.radius = Math.floor(Math.random()*(100-2)+2);
	}
	shadowBlur(){
		return this.shadow = 25;
	}
	circle(){
		ctx.beginPath();
		ctx.fillStyle = this.cssColor;
		ctx.strokeStyle = this.cssColor;
		ctx.arc(this.x-this.radius(),this.y-this.radius(),this.radius(),0,Math.PI*2,true);
		ctx.fill();
		ctx.stroke();
		ctx.shadowBlur = this.shadowBlur();
		ctx.shadowColor= this.cssColor;

	}
	square(){
		ctx.lineWidth = 5;
		ctx.fillStyle = this.cssColor;
		ctx.strokeStyle = this.cssColor;
		ctx.fillRect(this.x-this.size,this.y-this.size,this.size,this.size);
		ctx.shadowBlur = this.shadowBlur();
		ctx.shadowColor= this.cssColor;
	}
	smiley(){
		ctx.beginPath();
		ctx.arc(this.x, this.y, this.radius(), 0, Math.PI * 2, true); 
		ctx.moveTo(this.x, this.y);
		ctx.arc(this.x, this.y, this.mouth, 0, Math.PI, false); 
		ctx.moveTo(this.x, this.y);
		ctx.arc(this.x, this.y, this.eye, 0, Math.PI * 2, true); 
		ctx.moveTo(this.x, this.y);
		ctx.arc(this.x, this.y, this.eye, 0, Math.PI * 2, true);
		ctx.fill();
		ctx.stroke();
		ctx.shadowBlur = this.shadowBlur();
		ctx.shadowColor= this.cssColor;
	}
	image(){
		this.img = new Image();
		this.img.src = "pen.png";
		ctx.drawImage(this.img-25,this.x-25, this.y-25, 50, 50);
	}

}

