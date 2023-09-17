<?php

class config {
	private static $instance = NULL;

	public static function getConnexion() {
		if (!isset(self::$instance)) {
			self::$instance = new PDO('mysql:host=localhost;dbname=clubEsprit', 'root', '');
		}
		return self::$instance;

	function afficherClubs()
	{
		$con=new PDO('mysql:host=localhost;dbname=clubEsprit', 'root', '');
		$query = $con->query("SELECT * FROM clubEsprit");
		if($query === false){
			die('Erreur SQL');}
			$clubs = $query->fetchAll(PDO::FETCH_ASSOC);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Club</title>
</head>
<body>
	<center>
		<h1>Affichage des clubs</h1>

	<table border="1">
		
		<tr>
			<td>Id</td>
			<td>Nom</td>
			<td>Description</td>
			<td>Adresse</td>
			<td>Domaine</td>
		</tr>

          <?php
          
     	   foreach($clubs as $club){
     	    ?>

		<tr>
			<td><?PHP echo $club['id'] ; ?></td>
			<td><?PHP echo $club['nom'] ; ?></td>
			<td><?PHP echo $club['description'] ; ?></td>
			<td><?PHP echo $club['adresse'] ; ?></td>
			<td><?PHP echo $club['domaine'] ; ?></td>
		</tr>

	</table>

</center>
</body>
</html>