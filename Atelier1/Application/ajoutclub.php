<?php
include 'manipulationdesclasses.php';
$id=$_POST['id'];
$nom=$_POST['nom'];
$des=$_POST['des'];
$adr=$_POST['adr'];
$dom=$_POST['dom'];

$club1 = new Club($id,$nom,$des,$adr,$dom);
var_dump($club1);
?>