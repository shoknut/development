var search = $('input[name=search]');
console.log(search);

function onClickResearch(key){

    $.getJSON('search.php?keys='+key, onReturnSearch);

}

$(document).on("keyup", OnKeyUp);

function OnKeyUp(event){
    var key=search.val();
    
    if(key==""){
        $('#target').empty();
    }
    onClickResearch(key);

}


function onReturnSearch(articles){
    $('#target').empty();
    for(var article of articles){
        var post = $("<p>").text(article.title);
        $("#target").append(post);
    }
}
