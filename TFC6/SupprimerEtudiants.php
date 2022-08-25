<?php

require_once("Connection6.php");

$code=$_GET['code'];
$req="delete from Etudiant6 where (CODE=$code)";
mysql_query($req) or die(mysql_error());

if ($req) {
	echo "<script>alert('Etes-vous sûr de vouloir supprimer')</script>";
	// code...
}
require_once("AfficheEtudiants6.php");

?>