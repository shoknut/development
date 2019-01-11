var prompt = window.prompt('Veuillez saisir une table de multiplication');

document.write("<table>");

for (var i = 1; i <= prompt; i++) {
	document.write("<tr style='height:30px;text-align:center;'>");
	for (var j = 1; j <= prompt; j++) {
		var result = (i*j) + ' ';
		if(j == 1*i) {
			var color_td = "#2076f7";
		}
		else {
			color_td = "#20def7";
		}
		document.write("<td style='width:30px;text-align:center;background-color:" + color_td + "'>" + result + "</td>");
	}
	document.write("</tr>");
}
document.write("</table>");