<?php
	$pdo = new PDO('mysql:host=localhost;dbname=blog', "root","troiswa");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("SET NAMES UTF8");
?>