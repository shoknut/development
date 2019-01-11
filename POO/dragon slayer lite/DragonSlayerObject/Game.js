class Game{
	constructor(){
		// je crée l'instance de mon Hero dans l'objet Game
		this.hero = new Hero();
		this.enemiesKilled = [];
		this.enemiesName = ["Octopus","Bouffon Vert","Le vautour", "L'homme-sable", "Tante May"];
	}
	// battle va etre appelé a chaque clic sur le bouton start
	battle(){
		$("#resultat").empty();
		var rand = this.enemiesName[Math.floor(Math.random()*game.enemiesName.length)];

		// création de l'ennemi
		if(this.hero.level >= 1 && this.hero.level <= 5){
			this.enemy = new Enemy(rand,5,10);
		}
		if (this.hero.level >= 6 && this.hero.level <= 10){
			this.enemy = new Enemy(rand,10,15);
		}
		if (this.hero.level >= 11 && this.hero.level <= 15){
			this.enemy = new Enemy(rand,20,25);	
		}

		if (this.hero.force > this.enemy.force/this.hero.defense){
			var p = $("<p>");
			p.text("Le héro a tué : " + this.enemy.name)
			$("#resultat").append(p);
			// incrémentation de l'xp du héro a chaque enemy tué
			this.hero.xp++;
			this.hero.CheckLevelUp();
			this.enemiesKilled.push(this.enemy);
			this.hero.gold += 5;
		}else{
			var p = $("<p>");
			p.text("L'ennemi " + this.enemy.name + " a vaincu!")
			$("#resultat").append(p);		
		}
		this.display();
	}
	// me servira a réafficher les informations
	display(){
		var p = $("<p>");
		p.text("La force du héros est de : " + this.hero.force);
		$("#resultat").append(p);

		var p = $("<p>");
		p.text("La défense du héros est de : " + this.hero.defense);
		$("#resultat").append(p);

		var p = $("<p>");
		p.text("La force de l'ennemi est de : " + this.enemy.force);
		$("#resultat").append(p);
		
		var p = $("<p>");
		p.text("Nombre d'ennemis tués : " + this.enemiesKilled.length);
		$("#resultat").append(p);
		var p = $("<p>");
		p.text("Or : " + this.hero.gold);
		$("#resultat").append(p);

	}
	buySword(){
		if(this.hero.gold >= 20){
			this.hero.gold -= 20;
			this.hero.force++;
			alert("Vous avez acheté une nouvelle épée !");
			this.display();
		}else{
			alert("Pas assez d'argent !");
		}

	}
	buyArmor(){
		if(this.hero.gold >= 20){
			this.hero.gold -= 20;
			this.hero.defense++;
			alert("Vous avez acheté une nouvelle armure !");
			this.display();
		}else{
			alert("Pas assez d'argent !");
		}
	}
}