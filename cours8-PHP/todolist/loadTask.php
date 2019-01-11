<?php
	$tab = [];
	
	$file = fopen("task.csv", "a+");
		// boucle infinie démarrée
		while(true){
			// récupérer une ligne
			$taskData = fgetcsv($file);
			if ($taskData == null){
				break;
			}
			array_push($tab, $taskData);
		}

    fclose($file);	
	


	
?>