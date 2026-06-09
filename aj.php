<?php
session_start();
$mysql=new mysqli('localhost','root','root','projet');
$result=$mysql->query('select * from services where Id_S='.$_POST['Id_S']);
$services =$result->fetch_assoc();
require_once "panier.php";
$panier=new panier('services');
$valeurs=array(
 'Nom_S' =>$services['Nom_S'],
 'Prix_S' =>$services['Prix_S'],
 'tva'=>$service['tva'],
 
 //'tail9' =>$_POST['tail9'],
  
	
 'Id_S' =>$services['Id_S']
 );
 $panier->set($_POST['Id_S'], $valeurs);

 header('location:vp.php');
?>