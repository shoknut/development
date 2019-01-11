<?php
include "loadTask.php";

// ouverture du fichier csv en mode "w", qui veut dire supprimer le contenu du fichier a l'ouverture
$file = fopen("task.csv","w");

$indexToDelete = $_POST["radio"];

foreach($tab as $index => $ligne){
	echo "l'index de la ligne courante ".$index;
	echo "l'index que je veux supprimer ".$indexToDelete;
	if($index != $indexToDelete){
		echo "je push dans le tableau";
		fputcsv($file, $ligne);
	}
}




header("Location: todolist.phtml");

?>