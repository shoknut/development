// déclaration de classe
class Dog{
    // appelé automatiquement lorsque vous faites "new"
    constructor(dogName, dogRace, dogAge){
        this.name = dogName;        
        this.race = dogRace;
        this.age = dogAge;
    }

    aboie(){
        alert(this.name +" fait WOOF");
    }

    mord(){
    	alert(this.name +" mord !");
    }

    beau(){
    	alert(this.name +" fait le beau !");
    }
}


// ici j'aimerai INSTANCIER ma classe ( a savoir, faire une copie du modele)
var medor = new Dog("Medor","Labrador",5);

var aboie = document.querySelector("#aboie");
var mord = document.querySelector("#mord");
var beau = document.querySelector("#beau");

aboie.addEventListener("click", (medor.aboie).bind(medor));
mord.addEventListener("click", (medor.mord).bind(medor));
beau.addEventListener("click", (medor.beau).bind(medor));

