class Hero{
	constructor(){
		this.force = 7;
		this.xp = 0;	
		this.level = 1;
		this.gold = 0;
		this.defense = 1;
	}
	CheckLevelUp(){
		// tout les DIX 
		if(this.xp % 10 == 0){
			this.level++;
			this.force++;
			alert("Bien joué ! Vous passez au niveau " + this.level);
		}

	}
}