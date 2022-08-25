
<?php

	if (isset($_REQUEST['attempt'])) {

$nom=$_POST['nom'];
$pass=$_POST['pass'];}
$error="";
$succes="";
if (isset($_POST['submit'])) {
	if ($nom=="admin"){
	    if ($pass=="password") {
	    $error="";
		$succes="Welcome Admin!!!";	
		
		header("Location:Welcom.php");
	}
	else{
		$error="Invalide password";
		$succes="";
	}
}
else {
      $error="Invalide Nom d'utilisateur";
	  $succes="";	
}	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

	<style type="text/css">

		#con{
                 font-size: 1em;
		}
		#con ,table{
                color: white;
		border: 150px;
		border-width: 2px ;
		border-style: solid;
	border-radius:20px ;
	box-shadow: 3px 5px 3px 3px ;
		}
		
	#con, h2, h3{
		font-family: cursive;
	}
	fieldset{
		width: 100px;
	}
	</style>

<body bgcolor="gray">
<div>
	<center>
		  <form method="POST" action="Index.php?attempt">
			       <fieldset><legend align="center"><h2 style="color:white">AUTHENTIFICATION</h2></legend>
			       			<p class="error"><?php echo $error;?></p><p class="succes"><?php echo $succes;?></p>
<table border="0" bgcolor="blue" width="450px">
<tr><thead><img src="images\bb1.png" alt="login" width="100px" height="100px">
</thead>

<tr><td><img src="images\bb2.png" alt="login" width="90" height="90" align="right"></td><td><h3>Nom d'utilisateur:</h3></td>
<td  align="left"><input type="text" name="nom" value="" placeholder="Entrez le nom d'utilisateur" required=""></td></tr>
<tr><td><img src="images\bb.png" alt="login" width="80px" height="80" align="right"></td><td><h3>Mot de passe:</h3></td>
<td align="left"><input type="password" name="pass" value="" placeholder="Entrez le mot de passe" required=""></td></tr>

</fieldset></table><br>

<tr><th align="center"><h3><input type="submit" name="submit" value="CONNECTION" id="con" style="color:blue;"><h3></th></tr></br>
<tr><th align="center"><h3><a href="#" style="color:white;">Mot de passe oublié?</h3></a></th></tr>

</form></center></div>
</body>
</html>