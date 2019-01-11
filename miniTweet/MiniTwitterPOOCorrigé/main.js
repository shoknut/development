$("#editForm").hide();


$(".edit").on("click",(e)=>{
	// empeche le bouton submit de rafraichir la page
    e.preventDefault();
    $("#container").hide();
    $("#editForm").show();

    $("#editForm").attr("action","main.php?action=edit&id="+$(e.target).data("id"));

   	$.getJSON("main.php?action=ajax&id="+$(e.target).data("id"), recupTweet)

});


function recupTweet(tweet){
	$("#pseudoEdit").val(tweet.pseudo);
	$("#contentEdit").val(tweet.content);

}