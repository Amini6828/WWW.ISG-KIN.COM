<?php

if (isset($_POST['update'])) {

$hostname="localhost";
$username="root";
$password="";
$dbname="inscription";
$con=mysqli_connect($hostname,$username,$password,$dbname) or die(mysqli_error());

$code=$_POST['code'];
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

//$code=mysql_real_escape_string($con,$_GET ['code']);

//$req="update Etudiant6 set NOM='$nom' where CODE=$code";
//var_dump("update Etudiant6 set NOM='$nom' where CODE=$code");

$req="update Etudiant6 set NOM='$nom',POSTNOM='$postnom',PRENOM='$prenom',PROMOTION='$promotion',OPTIONS='$options',PHOTO='$nomPhoto',SEXE='$sexe',EMAIL='$email',TELEPHONE=$telephone, DATE_NAIS='$date' where CODE=$code";
//mysql_query($req) or die(mysql_error());

//$req="update `Etudiant6` set `NOM`='".$nom."',`POSTNOM`='".$postnom."',`PRENOM`='".$prenom."',`PROMOTION`='".$promotion."',`OPTIONS`='".$options."',`PHOTO`='".$nomPhoto."',`SEXE`='".$sexe."',`EMAIL`='".$email."',`TELEPHONE`=$telephone,`DATE_NAIS`='".$date."' where `CODE`=$code";

$resultat=mysqli_query($con, $req);

if ($resultat) {
	echo 'Data update';
}else{
	echo 'data not update';
}

mysqli_close($con);

/*var_dump($con,"update `etudiant6` set `NOM`=[$nom],`POSTNOM`=[$postnom],`PRENOM`=[$prenom],`PROMOTION`=[$promotion],`OPTIONS`=[$options],`PHOTO`=[$nomPhoto],`SEXE`=[$sexe],`EMAIL`=[$email],`TELEPHONE`=[$telephone],`DATE_NAIS`=[$date] where `CODE`=[$code]");*/

header("location:AfficheEtudiants6.php");
}

?>
