'use strict';

// je veux aussi le select pour écouter l'evenement change (a chaque fois que l'on change d'option)
$("#meal").on("change", onChangeMeal);

$("#addMeal").on("click", onClickAddMeal);

$("#validate-order").on("click", onValidateOrder);

var currentMeal;
var totalAmount = 0;

var panier = loadDataFromDomStorage("panier");
if (panier == null){
    panier = [];
}

display();
/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////


function onChangeMeal(){
// ca c'est l'option selectionnée
    var optionSelected = $("#meal option:selected");
    var mealID = optionSelected.val();

    $.getJSON(getRequestUrl()+"/meal?numeroRepas="+mealID, onReturnMeal);
}

// lorsque ajax nous renvoie le bon repas
function onReturnMeal(meal){
    currentMeal = meal;
    // sera appelé lorsque ajax aura renvoyé la réponse
    var img = $("#meal-details img");
    var p =  $("#meal-details p");
    var span = $("#meal-details span");
    img.attr("src", getWwwUrl()+"/images/meals/"+meal.Photo);
    p.text(meal.Description);
    span.text(meal.SalePrice);
}

function onClickAddMeal(){
    currentMeal.quantity = $("#quantity").val();
    panier.push(currentMeal);
    saveDataToDomStorage("panier", panier);
    display();
}

function display(){
    $("#bodyPanier").empty();
    var index = 0;

    for(var repas of panier){
        var tr = $("<tr>");
        var tdQuantite = $("<td>");
        var tdName = $("<td>");
        var tdPrice = $("<td>");
        var tdTotalPrice = $("<td>");
        var tdTrash = $("<a>");

        $("#bodyPanier").append(tr);
        tr.append(tdQuantite);
        tr.append(tdName);
        tr.append(tdPrice);
        tr.append(tdTotalPrice);
        tr.append(tdTrash);

        tdQuantite.text(repas.quantity);
        tdName.text(repas.Name);
        tdPrice.text(repas.SalePrice);
        tdTotalPrice.text(repas.SalePrice*repas.quantity);

        tdTrash.attr("href","#");
        tdTrash.attr("data-position", index);
        tdTrash.text("Supprimer");
        tdTrash.on("click", deleteMeal);

        totalAmount += repas.SalePrice*repas.quantity;
        index++;
    }
}

function onValidateOrder(){

    // j'encapsule mon panier dans un objet pour avoir un couple clé/valeur
    // PHP n'accepte pas qu'on lui poste un tableau de valeurs seulement
    var data = {"panier":panier, "totalAmount":totalAmount};

    $.post(getRequestUrl()+"/validate", data, onReturnPostOrder);
}

// appelé des qu'on a fini de poster (et que sendJsonReponse est lue par le code)
function onReturnPostOrder(id){
    var id = JSON.parse(id);

    // rediriger vers recap en lui envoyant mon id de commande (via JS)
    window.location.assign(getRequestUrl()+"/recap?numeroCommande="+id);
}

function deleteMeal(){
    var position = $(this).data("position");
    panier.splice(position, 1);

    saveDataToDomStorage("panier",panier);
    display();
}

/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////

var optionSelected = $("#meal option:selected");
var mealID = optionSelected.val();
$.getJSON(getRequestUrl()+"/meal?numeroRepas="+mealID, onReturnMeal);
