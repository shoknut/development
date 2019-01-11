'use strict';

$(".editButton").on('click', EditTweet);


function EditTweet(){
	$.getJSON('main.php?action=ajax&id='+$(this).data("id"), onReturnJSON);
	$("#formSend").attr("action", "main.php?action=edit&id="+$(this).data("id"));
}

function onReturnJSON(tweet){
	$("#pseudo").val(tweet.pseudo);
	$("#content").val(tweet.content);
 }