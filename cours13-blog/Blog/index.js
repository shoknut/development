var search = $("#search");

document.addEventListener("keyup", function(event){
	var key = search.val();

	$.getJSON("searchArticle.php?keys="+key, function(posts){
		$("#target").empty();
		for(var post of posts){
			var a = $("<a>");
			var pContent = $("<p>");
			var pAuthor = $("<p>");

			a.text(post.Title);
			pContent.text(post.Contents);
			pAuthor.text(post.FirstName + " " + post.LastName);

			$("#target").append(a);
			$("#target").append(pContent);
			$("#target").append(pAuthor);
		}
	});
});