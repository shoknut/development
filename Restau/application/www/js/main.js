'use strict';

var mealList = [];

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS //

///////////// ORDER /////////////

//pour sélectionner un repas
function takeIdBySelect(){
    var mealSelected = $("select option:selected").val();

    $.getJSON(getRequestUrl()+"/meal?id="+mealSelected, requestJSON);

}

//déclaration d'une var currentMeal pour dire que
//c'est le meal sélectionné
var currentMeal;

//pour montrer l'image et la description lorsqu'on
//select le repas
function requestJSON(meal){
    currentMeal = meal;
    //dire que la div est vide donc tu me
    //show le repas sélectionné
    $("#showMeal").empty();

    var div = $("#showMeal");

    //création d'un p pour chaque élément
    //à afficher
    var pDescription = $("<p>");
    var pImage = $("<p>");

   pImage.append($("<img>").attr("src", getWwwUrl()+"/images/meals/"+meal.Photo));

    pDescription.text(meal.Description+" "+meal.SalePrice+" €");

    div.append(pImage);
    div.append(pDescription);

}

function onClickAdd(){
    currentMeal.quantity = $("#quantity").val();
    //on injecte dans le tableau les infos que l'on aura récupéré dans addProduct
    mealList.push(currentMeal);

    // CA INJECTE LE TABLEAU DANS LE STORAGE
    //setItem("key") -> c'est le nom qu'on donne
    //on doit la récupérer lorsqu'on fait un GET
    localStorage.setItem("meal", JSON.stringify(mealList));

    showCart();

}
var totalValue = 0;

function showCart(){
    $("#cart").empty();
    var position = 0;
    totalValue = 0;

    for (var meal of mealList) {


        var tbody = $("#cart");
        var tr = $("<tr>");
        var tdQuantity = $("<td>");
        var tdProduct = $("<td>");
        var tdPriceEach = $("<td>");
        var tdPriceTot = $("<td>");
        var trash = $("<i>");
        trash.attr("class", "fas fa-trash-alt");
        var a = $("<a>");
        a.attr("href", "#").attr("data-position", position);



        tdQuantity.text(meal.quantity);
        tdProduct.text(meal.Name);
        tdPriceEach.text(meal.SalePrice);
        tdPriceTot.text(meal.SalePrice * meal.quantity);
        totalValue += meal.SalePrice * meal.quantity;

        tbody.append(tr);
        tr.append(tdQuantity);
        tr.append(tdProduct);
        tr.append(tdPriceEach);
        tr.append(tdPriceTot);
        tr.append(a);
        a.append(trash);
        a.on("click", onClickTrash);
        position++;
    }
    console.log(totalValue);
}

function onClickTrash(){

    var positionMeal = $(this).attr("data-position");

    mealList.splice(positionMeal, 1);

    localStorage.setItem("meal", JSON.stringify(mealList));

   showCart();
}



///////////// VALIDER PANIER /////////////
function validateCart(){
    //on est obligé de créer un objet car $.post ne lit que des objets

    var data = {"panier":mealList, "totalValue":totalValue};

    $.post(getRequestUrl()+"/recap", data, onReturnRecap);
}

function onReturnRecap(id){
    $("#cart").empty();
    localStorage.clear();
    var id = JSON.parse(id);

    // redirection vers la page validation
    window.location.assign(getRequestUrl()+"/validation?id="+id);

}

//pour le bouton annuler
//$("#cart").empty();
//localStorage.clear();



/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL //

$("#product").on("change", takeIdBySelect);

$(".add").on("click", onClickAdd);

mealList = JSON.parse(localStorage.getItem("meal"));

if (mealList == null){
    // recrée un tableau vide
    mealList = [];
}


showCart();

$(".valider").on("click", validateCart);

/////////////////////////////////////////////////////////////////////////////////////////

