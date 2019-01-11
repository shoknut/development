//JOUR DE LA SEMAINE
var date = new Date();
var day = date.getDay();


//déclaration du tableau
var weekDays = [];
weekDays[0] = 'lundi';
weekDays[1] = 'Mardi';
weekDays[2] = 'Mercredi';
weekDays[3] = 'Jeudi';
weekDays[4] = 'Vendredi';
weekDays[day-1];

//document.write(weekDays[day-1]);

//MOIS
var month = date.getMonth();

var monthly = [];
monthly[0] = "Janvier"; 
monthly[1] = "Fevrier"; 
monthly[2] = "Mars"; 
monthly[3] = "Avril"; 
monthly[4] = "Mai"; 
monthly[5] = "Juin"; 
monthly[6] = "Juillet"; 
monthly[7] = "Aout"; 
monthly[8] = "Septembre"; 
monthly[9] = "Octobre"; 
monthly[10] = "Novembre"; 
monthly[11] = "Décembre"; 

monthly[month];
//document.write(monthly[month]);

//DATE DU JOUR

var today = date.getDate();
//document.write(today);

//ANNEE
var year = date.getFullYear();
//document.write(year);

//AFFICHAGE DE LA DATE DU JOUR
document.write("<p>" + "Nous sommes le " + weekDays[day-1] + " " + today + " " + monthly[month] + " " + year + "</p>");