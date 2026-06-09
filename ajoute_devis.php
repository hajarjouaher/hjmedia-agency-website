<?
$con=mysql_connect("localhost","root","root");
mysql_select_db("projet",$con);
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Email=$_POST['Email'];
$Tele=$_POST['Tele'];
$Description=$_POST['Description'];
$Budget=$_POST['Budget'];
$Delai=$_POST['Delai'];
$Message=$_POST['Message'];



$sql="insert into devi (Nom,Prenom,Email,Tele,Description,Budget,Delai,Message) values ('$Nom','$Prenom','$Email','$Tele','$Description','$Budget','$Delai','$Message')";
mysql_query($sql) or die (mysql_error());
header ("location: it_devis.php");


?>