<?
$con=mysql_connect("localhost","root","root");
mysql_select_db("projet",$con);
$nom=$_POST['nom'];
$pre=$_POST['pre'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$msg=$_POST['msg'];


$sql="insert into contact (nom,pre,email,tel,msg) values ('$nom','$pre','$email','$tel','$msg')";
mysql_query($sql) or die (mysql_error());
header ("location:it_contact.html");


?>