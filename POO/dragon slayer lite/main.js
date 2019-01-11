/////////////Déclaration des variables ////////////

var player = new Player("Player",7,0,1);
var game = new Game(0,0);

/////////////Fonctions ////////////

function battle(){
	var monster = new Monster("Dragon",Math.floor(Math.random()*(10-5+1)+5));
	var result = $("#result");
	var winner = $("#winner");
	var playerForce = $("#playerForce");
	var monsterForce = $("#monsterForce");
	
	if(player.force > monster.force){

		player.xp++;
		game.dead++;
		player.goldCoin += 5;

		if(player.xp == 10){
			player.lvl++;
			
		}
		
		
		winner.text(player.name + " is the WINNER ! ");
		playerForce.text("Force du " + player.name + " : " + player.force);
		monsterForce.text("Force du "+ monster.name + " : " + monster.force);
		$("#vainqueur").attr("src","winner.jpeg");


    }     
    else if (player.force == monster.force){
		winner.text(" Egality !!!!");
		playerForce.text("Force du " + player.name + " : " + player.force);
		monsterForce.text("Force du "+ monster.name + " : " + monster.force);
	

		
    }    
    else{         
    	winner.text(" Tu es MOURRU ! ='(' ");
		playerForce.text("Force du " + player.name + " : " + player.force);
		monsterForce.text("Force du "+ monster.name + " : " + monster.force);
		$("#vainqueur").attr("src","dragon.png");
		
	}
	$("#goldcoin").text("Nombre de pièces : " + player.goldCoin);
	$("#monsterKilled").text("Nombre de monstres tués : " + game.dead);
	$("#level").text("Niveau actuel : " + player.lvl);
	$("#xp").text("Nombre de XP : " + player.xp);
}

function stop(){
	$("div").empty();
	
	$("#goldcoin").text("Nombre de pièces : " + player.goldCoin);
	$("#monsterKilled").text("Nombre de monstres tués : " + game.dead);
}

/////////////Code principale////////////

$("#start").on('click', battle);
$('#stop').on('click',stop);