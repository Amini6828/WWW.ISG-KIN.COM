<?php

require_once("Connection6.php");

$mc="Null";
if (isset($_POST['motcle'])) {
	# code...
	$mc=$_POST['motcle'];
}

$req= "SELECT * from Etudiant6  where NOM like'%$mc%'"; 
$rs=mysql_query($req) or die (mysql_error());

?>

<!DOCTYPE html>
<html>
<head>	<meta charset="utf-8">

	<style type="text/css">

a{ font-family: cambria;
	background-color: blue;
    text-shadow:2px 3px 2px red ;
	border: 150px;
	border-width: 2px ;
	border-style: solid;
	border-radius:10px ;
	box-shadow: 3px 2px 3px blue;
	text-decoration: none;
	color: white;
			}
	table{
		border: 1px solid black;
		border-radius: 15px;
		box-shadow: 10px 2px 10px #000000;}
	
	</style>

	<title>CHERCHER ETUDIANTS</title>
</head>
<body>
	<center><h2 align="center"><strong style="color:red;"><a href="Menugénérale.html">MENU GENERAL</strong></a></h2>

<form method="POST" action="ChercherEtudiants.php">
	Mot clé : <input type="text" name="motcle" value=" <?php echo ($mc) ?>" >
	<input type="submit" name="" value="Chercher"> <br><br>
</form>

	<table border="1" width="100%" cellspacing="0">

<tr><th>CODE</th><th>NOM</th><th>POSTNOM</th><th>PRENOM</th><th>PROMOTION</th><th>OPTIONS</th><th>PHOTO</th><th>SEXE</th><th>EMAIL</th><th>DATE</th></tr>

<?php while ($ET=mysql_fetch_assoc($rs)){?>

<tr>
<td><?php echo ($ET['CODE'])?></td>
<td><?php echo ($ET['NOM'])?></td>
<td><?php echo ($ET['POSTNOM'])?></td>
<td><?php echo ($ET['PRENOM'])?></td>
<td><?php echo ($ET['PROMOTION'])?></td>
<td><?php echo ($ET['OPTIONS'])?></td>

<td><img src="images/<?php echo ($ET['PHOTO'])?>" width="140" height="130"></td>
<td><?php echo ($ET['SEXE'])?></td>
<td><?php echo ($ET['EMAIL'])?></td>
<td><?php echo ($ET['DATE'])?></td>

<td><a href="SupprimerEtudiants.php?code=<?php echo ($ET['CODE'])?>"  onclick='return checkdelete()'>Supprimer</a></td>  
<td><a href="EditEtudiants.php?code=<?php echo ($ET['CODE'])?>">Editer</a></td>
</tr>

<?php }  ?>

</table>

<script type="text/javascript">
	function checkdelete()
	{return confirm('Est un sûr de vouloir supprimer?');}
</script>

<br/>
<div>
	<button onclick="window.print()"><strong>IMPRIMER</strong></button>

</div>

</center>
</body>
</html>
