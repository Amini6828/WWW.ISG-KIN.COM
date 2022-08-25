<?php

require_once("Connection6.php");

$nom=$_POST['nom'];
$postnom=$_POST['postnom'];
$prenom=$_POST['prenom'];
$promotion=$_POST['promotion'];
$options=$_POST['options'];
$nomPhoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./images/$nomPhoto");
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$date=$_POST['date'];

$req="insert into etudiant6 (NOM,POSTNOM,PRENOM,PROMOTION,OPTIONS,PHOTO,SEXE,EMAIL,TELEPHONE,DATE_NAIS) values ('$nom','$postnom','$prenom','$promotion','$options','$nomPhoto','$sexe','$email','$telephone','$date')";
mysql_query($req) or (die(mysql_error()));

//}
	?>
<style type="text/css">

tr,td,th{border-radius: 8px 8px;
		border: 1px solid black;
		width: 200px;
	}
	table{
		border: 1px solid black;
		border-radius: 15px 15px;
		box-shadow: 10px 2px 10px #000000;
	}
	

#con{
		width: 80px;
		height: 30px;
		font-family: cursive;
}

	a{text-shadow: 3px 2px 4px black;
		border: 1px solid;
		border-radius: 20px 20px;
		box-shadow: 8px 3px 8px #000000;
		width: 100%;
		font-family: cursive;
		font-size: 20px;
		list-style: none;
		text-decoration: none;
	}
</style>

<!DOCTYPE html>
<html>
<head>
	
	<title>AJOUTER ETUDIANTS</title><meta charset="utf-8">

</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<body bgcolor="">

	<div class="table">
	
	<table border="1" width="100%" cellspacing="0">
<tr><td>NOM:</td>
		<td><?php echo ($nom)?></td></tr>
<tr><td>POSTNOM:</td>
		<td><?php echo ($postnom)?></td></tr>
<tr><td>PRENOM:</td>
		<td><?php echo ($prenom)?></td></tr>
<tr><td>PROMOTION:</td>
		<td><?php echo ($promotion)?></td></tr>
<tr><td>OPTIONS:</td>
		<td><?php echo ($options)?></td></tr>

<tr><td>PHOTO:</td>
		<td><img src="images/<?php echo ($nomPhoto)?>" height="140" width="150"></td></tr>
<tr><td>SEXE:</td>
<td><?php echo ($sexe)?></td></tr>
<tr><td>EMAIL:</td>
		<td><?php echo ($email)?></td></tr>
<tr><td>TELEPHONE:</td>
		<td><?php echo ($telephone)?></td></tr>
<tr><td>DATE_NAIS:</td>
		<td><?php echo ($date)?></td></tr>

	</table><br>

<center><a href="AfficheEtudiants6.php" style="color:blue;" id="con">Afficher les étudiants</a></center>

</div>

</body>
</html>
