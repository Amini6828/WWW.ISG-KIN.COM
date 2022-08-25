<?php

require_once("Connection6.php");

$req= "select * from Etudiant6";
$rs=mysql_query($req) or die (mysql_error());

?>

<!DOCTYPE html>
<html>
<style type="text/css">                                       

	td,th{
		border: 1px solid black;
		width: 200px;
	}
	table{
		border: 1px solid black;
		border-radius: 15px 15px;
		box-shadow: 10px 2px 10px #000000;
	}
	
	.affiche{text-shadow: 2px 3px 3px black;
		text-decoration: none;
		border: 1px solid blue;
		border-radius: 10px 10px;
		box-shadow: 10px 2px 10px #000000;
		width: 80%;	
		font-family: cursive;
	}

	h1{text-shadow: 2px 3px 3px black;
		border: 1px solid blue;
		border-radius: 10px 10px;
		box-shadow: 10px 2px 10px #000000;
		width: 80%;
		font-family: cursive;
	}
	 a{
		font-style: italic;
		font-size: x-large;
	}
</style>

<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center><a href="Menugénérale.html" style="color: blue" class="affiche">MENU GENERAL</a>

				<h1 style="color: blue">LISTE DES ETUDIANTS</h1><br/>

	<table border="1" width="100%" cellspacing="0">

<tr><th>CODE</th><th>NOM</th><th>POSTNOM</th><th>PRENOM</th><th>PROMOTION</th><th>OPTIONS</th><th>PHOTO</th><th>SEXE</th><th>EMAIL</th><th>TELEPHONE</th><th>DATE_NAIS</th></tr>

<?php while ($ET=mysql_fetch_assoc($rs)){?>

<tr>
<td><?php echo ($ET['CODE'])?></td>
<td><?php echo ($ET['NOM'])?></td>
<td><?php echo ($ET['POSTNOM'])?></td>
<td><?php echo ($ET['PRENOM'])?></td>
<td><?php echo ($ET['PROMOTION'])?></td>
<td><?php echo ($ET['OPTIONS'])?></td>

<td><img src="images/<?php echo ($ET['PHOTO'])?>" width="100" height="100"></td>
<td><?php echo ($ET['SEXE'])?></td>
<td><?php echo ($ET['EMAIL'])?></td>
<td><?php echo ($ET['TELEPHONE'])?></td>
<td><?php echo ($ET['DATE_NAIS'])?></td>

<td><a href="SupprimerEtudiants.php?code=<?php echo ($ET['CODE'])?>" onclick='checkdelete()'>Supprimer</a></td>  

<td><a href="EditEtudiants.php?code=<?php echo ($ET['CODE'])?>">Editer</a></td>
</tr>

<?php }  ?>

</table>

<br><br>

<script type="text/javascript">
	function checkdelete(){
		return confirm('Voulez-vous vraiment supprimer?');
	}
</script>

<div>
	<button onclick="window.print()"><strong>IMPRIMER</strong></button>
</center>
</body>
</html>
