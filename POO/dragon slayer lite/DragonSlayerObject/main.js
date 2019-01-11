var button = document.getElementById("start");
var game = new Game();

button.addEventListener("click", ()=>game.battle());
$("#sword").on("click", ()=>game.buySword());
$("#armor").on("click", ()=>game.buyArmor());