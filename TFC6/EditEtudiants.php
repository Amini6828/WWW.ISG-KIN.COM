
<style type="text/css">

      .gracia{color: white;
		border: 1px;
		border-width: 2px ;
		border-style: solid;
	       border-radius:10px ;
	    	box-shadow: 3px 4px 5px 3px ;
		font-style: italic;
		font-size: x-large;
        	text-decoration: none;
		font-family: cursive;
		margin: 60px;
		padding: 5px;
		position: absolute;
		display: flex;
		}
      #content{font-size: 1em;
		}
      #con ,table{
        	color: white;
		border: 150px;
		border-width: 2px ;
		border-style: solid;
		border-radius:20px ;
		box-shadow: 3px 5px 3px 3px ;
		}
		
	#con{
		width: 80px;
		height: 30px;
		font-family: cursive;
	}

	input{
		height: 20px;
	}
	h1{text-shadow: 2px 3px 3px black;
		border: 2px solid blue;
		border-radius: 10px 10px;
		box-shadow: 10px 2px 10px #000000;
		width: 100%;
		font-family: cursive;
	}
		text-align: center;
	}
	center{
		position: relative;
	}
	.identifie{align-items: ;
	}
	.envoie{
		height: 40px;
		width: 150px;
	}
	a{
		font-style: italic;
		font-size: x-large;
	}
</style>

<?php

require_once("Connection6.php");

$code=$_GET['code'];
$req="select * from Etudiant6 where CODE=$code";
$rs=mysql_query($req) or die(mysql_error());
$ET=mysql_fetch_assoc($rs);

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDITER ETUDIANTS</title><meta charset="utf-8">
</head>
<body bgcolor="gray">

<a href="Menugénérale.html" class="gracia">MENU GENERAL</a>

	<form method="POST" action="ModifierEtudiants.php" enctype="multipart/form-data">

<fieldset><legend align="center"><h1 style="color:whitesmoke;">INSCRIPTION DES ETUDIANTS EN LIGNE</h1></legend>

<center>
		<table border="0" width="20%">

<tr><td class="identifie">CODE:</td>
		<td><input type="text" name="code" value="<?php echo ($ET['CODE']) ?>" readonly="true"></td></tr>
<tr><td class="identifie">NOM:</td>
		<td class="identifie"><input type="text" name="nom" value="<?php echo ($ET['NOM']) ?>" required></td></tr>
<tr><td class="identifie">POSTNOM:</td>
		<td><input type="text" name="postnom" value="<?php echo ($ET['POSTNOM']) ?>" required></td></tr>
<tr><td class="identifie">PRENOM:</td>
		<td><input type="text" name="prenom" value="<?php echo ($ET['PRENOM']) ?>" required></td></tr>
<tr><td class="identifie">PROMOTION:</td>
		<td><select size="0" name="promotion" value="<?php echo ($ET['PROMOTION']) ?>" required><option>G1</option><option>G2</option><option>G3</option><option>L1</option><option>L2</option><option>Master</option></select></td></tr>
<tr><td class="identifie">OPTION:</td>
		<td><select size="0" name="options" value="<?php echo ($ET['OPTION']) ?>" required><option>Gestion Informatique</option><option>Science Infirmière</option><option>Marketing</option><option>Secrétariat</option><option>Hôtellerie</option></select></td></tr>
<tr><td>PHOTO:</td>
	<td><img src="images/<?php echo ($ET['PHOTO'])?>" width="100" height="100">
	<input type="file" name="photo" value="" required></td></tr>
<tr><td class="identifie">SEXE:</td>
		<td><select size="0" name="sexe" value="<?php echo ($ET['SEXE']) ?>" required><option>Masculin</option><option>Féminin</option></select></td></tr>
<tr><td class="identifie">EMAIL:</td>
		<td><input type="text" name="email" value="<?php echo ($ET['EMAIL']) ?>" required></td></tr>
<tr><td>TELEPHONE:</td>
		<td><input type="text" name="telephone" value="<?php echo ($ET['TELEPHONE']) ?>" required></td></tr>
<tr><td class="identifie">DATE:</td>
		<td><input type="date" name="date" value="<?php echo ($ET['DATE_NAIS']) ?>" required></td></tr>

</table><br>

<input type="submit" name="update" value="Envoyer" class="identifie" id="con" style="color:blue;">
<input type="reset" name="" value="Annuler" class="identifie" id="con" style="color:blue;">

</fieldset>
</form>
</center>
</center>
</body>
</html>

<?php
mysql_free_result($rs);
mysql_close($con);
?>
   