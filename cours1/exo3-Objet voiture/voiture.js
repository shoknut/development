//Déclare l'objet : personne
//var person = new Object();
//person.age = 32;
//person.gender = "femme";
//person.name = "Gigi";
//console.log(person)

//Déclaration de l'objet : voiture
var car = new Object();
car.marque = "Toyota";
car.year = "2015";
car.buy = "10.01.2018";
console.log(car);


//Déclare l'objet : passager1 et passager2
var person1 = new Object();
person1.name = "Toto";
person1.age = 30;
person1.gender = "homme"
console.log(person1);

var person2 = new Object();
person2.name = "Bobo";
person2.age = 35;
person2.gender = "homme"
console.log(person2);


//Affichage des objets
document.write("<p>" + "La voiture est de marque" + " " + car.marque +"</p>");
document.write("<p>" + "Elle a été fabriquée en" + " " + car.year + "</p>");
document.write("<p>" + "Elle a été achetée le" + " " + car.buy +"</p>");
document.write("<p>" + "Les passagers sont" + " " + person1.name + " " + "et" + " " + person2.name + "</p>");