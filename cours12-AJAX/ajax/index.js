'use strict';

//Récupération du contenur HTML du serveur
$(function()
{
    $('#run').on('click', onClickExecute);
    
});

function onClickExecute() {
    var radio = $('input[name = btn-radio]:checked').val();

    if (radio === 'htmlContent') {
        $.get('article.php', onReturnArticle);
    }
    else if (radio === 'jsonContent') {
        $.getJSON('json.php', onReturnJSON);
    }
    else if (radio === 'movieContent') {
        $.get('films.php', onReturnArticle);
    }
    else{
        $.getJSON('product.php', onReturnProduct);
    }
}



function onReturnJSON(tableauJson){
    $('#target').empty();
    // fais une boucle sur tableau json
    for (var contact of tableauJson){
       var div = $("<div>");
       var p1 = $("<p>");
       var p2 = $("<p>");
       div.append(p1);
       div.append(p2);
       $("#target").append(div);
       p1.text(contact.name);
       p2.text(contact.telephone);
    }
}

function onReturnArticle(article)
{
    $('#target').empty();
    // La réponse HTTP contient du HTML que l'on insère donc dans la page.
    $('#target').append(article);
}

function onReturnProduct(productTab)
{
    $('#target').empty();
    for(var product of productTab){
        var productname = $("<p>").text(product.productName);
        $("#target").append(productname);
    }
}

var search = $('#autocompletion');
console.log(search);
function onClickResearch(key){

    $.getJSON('search.php?keys='+key, onReturnSearch);

}

$(document).on("keyup", OnKeyDown);

function OnKeyDown(event){
    var key=search.val();
    console.log(key);
    if(key==""){
        $('#target').empty();
    }
    onClickResearch(key);

}


function onReturnSearch(products){
    $('#target').empty();
    for(var product of products){
        var productname = $("<p>").text(product.productName);
        $("#target").append(productname);
    }
}

