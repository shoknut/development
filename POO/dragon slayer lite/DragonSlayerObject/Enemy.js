class Enemy{
	constructor(name, min, max){
		this.name = name;
		this.force = Math.floor(Math.random() * (max-min)+min);
	}
}