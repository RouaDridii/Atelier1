<?PHP
$id=$_POST['id'];
$nom=$_POST['nom'];
$des=$_POST['des'];
$adr=$_POST['adr'];
$dom=$_POST['dom'];
if (empty($id) || emty($nom) || empty($des) || empty($adr) || empty($dom)) {
	echo "champ manquant";
}
else{
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

		<tr>
			<td><?PHP echo $id ?></td>
			<td><?PHP echo $nom ?></td>
			<td><?PHP echo $des ?></td>
			<td><?PHP echo $adr ?></td>
			<td><?PHP echo $dom ?></td>
		</tr>

	</table>

</center>
</body>
</html>
<?php
}
?>
