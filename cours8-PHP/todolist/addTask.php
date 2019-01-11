<?php
	$file = fopen("task.csv", "a+");
	$titre = $_POST["titre"];
	$description = $_POST["description"];
	$date = $_POST["dateEnd"];
	$priority = $_POST["priority"];

	$task = [$titre, $description, $date, $priority];

	fputcsv($file, $task);

	fclose($file);
	header('Location: todolist.phtml');
?>