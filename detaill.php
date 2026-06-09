<?php
session_start();
require_once 'panier.php';
$panier=new panier('services');
$listeproduit=$panier->getpanier();
?>
<meta http-equiv="refesh" content="0;projet.html" />
<?
$conn=mysql_connect("localhost","root","root");
mysql_select_db("projet",$conn);
$datec=$_POST['datec'];
//$id_comn=$produit['id_comn'];
$sql="insert into commande (datec) values ('$datec')";
mysql_query($sql) or die (mysql_error());
?>
<?
$con=mysql_connect("localhost","root","root");
mysql_select_db("projet",$con);
$pre=$_POST['pre'];
$nom_c=$_POST['nom_c'];
$civi=$_POST['civi'];
$adre=$_POST['adre'];
$paye=$_POST['pay'];
$ville=$_POST['ville'];
$codepo=$_POST['codepo'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$date=$_POST['date_c'];
$type_regl=$_POST['type_regl'];
$n_compte=$_POST['n_compte'];
$code_securise=$_POST['code_securise'];
$nom_porteur=$_POST['nom_porteur'];


//$id_comn=$produit['id_comn'];
$sql="insert into client (pre,nom_c,adre,pay,ville,codepo,tel,email,date_c,type_regl,n_compte,code_securise,nom_porteur) values('$pre','$nom_c','$adre','$paye','$ville','$codepo','$tel','$email','$date','$type_regl','$n_compte','$code_securise','$nom_porteur')";
mysql_query($sql) or die (mysql_error());
?>

<?php foreach($listeproduit as $services){?>
<?
$conn=mysql_connect("localhost","root","root");

mysql_select_db("projet",$conn);
$Id_S=$services['Id_S'];
$qte_d=$services['qte_d'];
$id_comn=$services['id_comnn'];
$id_clt=$services['id_cltt'];


$sql="insert into detailc (Id_S,qte_d,id_comnn,id_cltt) values ('$Id_S','$qte_d','$id_comnn','$id_cltt')";
mysql_query($sql) or die (mysql_error());

?>
<?
$con=mysql_connect("localhost","root","root");

mysql_select_db("projet",$conn);
$Id_S=$produit['Id_S'];
$qte_d=$produit['qte'];
$id_comn=$produit['id_comnn'];
$id_clt=$produit['id_cltt'];




?>
<?php }?>
<?php
$totale=(1*$prix) ;
	$soustotale=($totale + $soustotale);
	$totaletva=(($totale*$tva)/100 +$totaletva);
	$totalglobale=($soustotale+$totaletva)
	?>
Prix Hors Taxe:<?php print $soustotale?>DHs<br />
  Total Tva :<?php print $totaletva?>DHs<br />
  TOTAL TTC: <?php print $totalglobale?>DHs<br />
  
<?php echo '<script>alert("VOTRE EST ACCEPTER ");</script>';?>
