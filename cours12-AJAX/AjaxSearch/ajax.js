var search = $("input[name=search]");

$(document).on("keyup",OnKeyDown);

function OnKeyDown(event){
	var key = search.val()
	if (search.val() == ""){
		$.getJSON("searchArticle.php?keys=all", onReturnSearch)
	}else{
		$.getJSON("searchArticle.php?keys="+key, onReturnSearch)
	}
}

function onReturnSearch(serverResponse){
	$(".post-list").empty();
	serverResponse.forEach(function(article){
		var firstName = article.FirstName;
		var lastName = article.LastName;
		var timeStamp = article.CreationTimestamp;
		var li = $("<li>");
		var h3 = $("<h3>");
		var i = $("<i>").attr("class","fa-hand-o-right");
		var a = $("<a>").attr("href","show_post.php?id="+article.Id).text(article.Title);
		var article = $("<article>").text(article.Contents);

		var small = $("<small>").text("Rédigé par " + firstName + " " + lastName + " le : " + timeStamp);
		li.append(i);
		li.append(a);
		li.append(article);
		li.append(small);
		$(".post-list").append(li);
	});

}