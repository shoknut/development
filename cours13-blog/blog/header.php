<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  ></script>
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Chewy" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
	<title>Blog</title>
</head>
<body>
	
	<header>
		<h1><a href="homePage.php"><i class="fas fa-microphone"></i> Encore un blog ?! #nonmaisallo</a></h1>
		<?php session_start(); ?>
		<?php if(!empty($_SESSION)) :?>
		
			<?php if($_SESSION["role"] == "admin"): ?>
				<p><a href="admin.php"><i class="fas fa-cogs"></i> Administration</a></p>
				
			<?php endif;?>

		<?php else: ?>
			<!-- Si pas de connexion, tu m'affiches les boutons connexion et inscription -->
			<?php if(!isset($_SESSION["user"])): ?>	
				<p><a href="connexion.php"><i class="fas fa-user"></i> Connexion</a></p>
				<p><a href="newMember.php"><i class="fas fa-user-plus"></i> Inscription</a></p>
			<?php endif; ?>
		<?php endif; ?>

		<?php if(isset($_SESSION["user"])): ?>
				<?php echo "<p style='color:white;'> Bienvenue ".$_SESSION["user"]."</p>"; ?>
				<p><a href="deconnexion.php"><i class="fas fa-user-plus"></i> déconnexion</a></p>
			
		<?php endif; ?>
	</header>
	<footer>
		<p>Le blog des élèves de la 3W Academy</p>
	</footer>
