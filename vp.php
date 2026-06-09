<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_localhost, $localhost);
$query_Recordset1 = "SELECT id_comn FROM commande order by id_comn desc";
$Recordset1 = mysql_query($query_Recordset1, $localhost) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);mysql_select_db($database_conn, $conn);
$query_Recordset1 = "SELECT id_comn FROM commande ORDER BY id_comn desc";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_localhost, $localhost);
$query_Recordset2 = "SELECT id_clt FROM client order by id_clt desc" ;
$Recordset2 = mysql_query($query_Recordset2, $localhost) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

session_start();
require_once 'panier.php';
$panier=new panier('services');
$listeproduit=$panier->getpanier();
 	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="../engine1/style.css" />
<script type="text/javascript" src="../engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script>
function hideThis(_div){
    var obj = document.getElementById(_div);
    if(obj.style.display == "block")
        obj.style.display = "none";
    else
        obj.style.display = "block";
}

</script>
<style type="text/css">
#afficher {
   width:500px;
}
#divjoconde {
   display:none;
   background: #ddd
}
#afficher:target #divjoconde {
   display:block
}
.masquer {
   display:none;
}
#afficher:target .masquer {
   display:inline;
}
#afficher:target .afficher {
   display:none;
}
</style>
<style type="text/css">
#afficher {
   width:500px;
}
#divjoconde {
   display:none;
   background: #ddd
}
#afficher:target #divjoconde {
   display:block
}
.masquer {
   display:none;
}
#afficher:target .masquer {
   display:inline;
}
#afficher:target .afficher {
   display:none;
}
</style>
<style>
.tableau {
  width:100%;
  table-layout: fixed;
  border-collapse: collapse;
}
.tableau caption {
  font-size:1.4rem;
  color:#ffffff;
  background-color: #5d625c;
 /* caption-side: bottom; // top|bottom|initial|inherit; */
}
.tableau th {
  background-color:#999690;
  color:#fff;
}
.tableau tfoot td {
  color:#fff;
  background-color:#999690;
  border-top:1px solid #5d625c;
  border-bottom:1px solid #5d625c;
}
.zebre tbody tr:nth-child(odd) {
  background-color: #d6d3ce;
  border-bottom:1px solid #ccc;
  color:#444;
}
.zebre tbody tr:nth-child(even) {
  background-color: #c6c3bd;
  border-bottom:1px solid #ccc;
  color:#444;
}
.zebre tbody tr:hover:nth-child(odd) {
  background-color: #999690;
  color:#ffffff;
}
.zebre tbody tr:hover:nth-child(even) {
  background-color: #999690;
  color:#ffffff;
}

/* La couleur ne fonctionne pas avec odd / even */
.tableau col:nth-child(1) {
  background-color:#d6d3ce;
}
.tableau col:nth-child(2) {
  background-color:#dddad4;width:100px;text-align:right;
}
.tableau col:nth-child(3) {
  background-color:#c6c3bd;color:#fff;width:100px;text-align:right;
}

.tableau td:nth-child(2) {
  text-align:right;
}
.tableau td:nth-child(3) {
  text-align:right;
}
</style>
<style>
#menu a {   
    display:block;   
    color: #fff;   
    text-decoration:none;  
}  
#menu > li,  
#menu > li li {  
    position: relative;  
    display:inline-block;  
    width: 110px;  
    padding: 6px 15px;  
    background-color: #777;  
    background-image: linear-gradient(#aaa, #888 50%, #777 50%,#999);  
}  
#menu > li li { background: transparent none; }  
#menu > li li a { color: #444; }  
#menu > li li:hover { background:#eee; }  
#menu > li:first-child {  
    border-right: 1px solid #777;  
    border-radius: 8px 0 0 8px;  
}  
#menu > li + li {  
    border-left: 1px solid #aaa;  
    border-right: 1px solid #777;  
}  
#menu > li:last-child {  
    border-right:0;  
    border-left: 1px solid #aaa;  
    border-radius: 0 8px 8px 0 ;  
}  
#menu > li:hover {  
    background-color: #999;  
    background-image: linear-gradient(#ccc, #aaa 50%, #999 50%,#bbb);  
}  
/* (presque) fin de la partie positionnement/déco */  
/* dans cette déclaration, on fixe le max-height */  
#menu ul {  
    position: absolute;  
    top: 2em; left:0;  
    max-height:0em;   
    margin:0; padding:0;  
    background-color:#ddd;  
    background-image: linear-gradient(#fff,#ddd);  
    overflow:hidden;  
    transition: 1s max-height 0.1s;  
    border-radius: 0 0 8px 8px;  
}  
/* ici on change la valeur de max-height au :hover */  
#menu > li:hover ul {  
    /* need an adaptation, lower is better, but see it large    */  
    max-height:18em;  
} 
</style>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
        <style type="text/css">
<!--
body {
	background-image: url();
}
.style4 {color: #000000}
.style6 {font-size: 14}
.style7 {font-size: 12px}
.style8 {font-size: 16px}
-->
        </style>
<style type="text/css">
input[type="text"],input[type="password"],select,input[type="date"]{ border-radius:5px 0px 0px 5px; width:250px; margin-bottom:4px; background-color:#f4f4f4; height:25px; background:#f4f4f4; padding:2px; border-radius-color:#ccc; width:245px; }
input[type="submit"]{ border-radius:7px 7px 7px 7px; width:200px; height:35px; background:#e99719; font-family:"Courier New", Courier, monospace; padding:2px; font-size:16px; cursor:pointer; }
textarea{ border-radius:7px 7px 7px 7px; height:120px; width:255px; background:#f4f4f4;}
textarea:focus{ border-color: rgba(82, 168, 236, 0.8);outline: 0;outline: thin dotted \9;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6); }

input[type="text"]:focus,input[type="password"]:focus,select:focus,input[type="date"]:focus{border-color: rgba(82, 168, 236, 0.8);outline: 0;outline: thin dotted \9;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);
}

label{ font-size:14px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#585b60; text-align:righ; }
.info{ font-family:"Courier New", Courier, monospace; font-size:16;color:#a4a4a5;}
.tt{ font-family:Verdana, Arial, Helvetica, sans-serif;font-size:16; color:#e99719;}
.style9 {font-style: italic}
</style>
</head>

<body>
<div align="center" class="style6">
    <ul id="menu">
	<li><a href="indexr.html">ACCUEIL</a>  
        <ul>  
            
        </ul> 
    </li>  
    <li><a href="#">HOMME</a>  
        <ul>  
            <li><a href="chesures.php">Chaussures</a></li>  
            <li><a href="indexeHchemise.php">Chemisiers</a></li>
			<li><a href="indexeHpontalon.php">Pantalons</a></li>
			<li><a href="indexeHtshort.php">T-Shirts</a></li> 
        </ul>  
    </li><li><a href="#">FEMME</a>  
        <ul>  
              
            <li><a href="indexefveste.php">Vestes & manteaux</a></li>  
            <li><a href="indexefchemise.php">Chemisiers</a></li>  
            <li><a href="indexefpontalan.php">Pantalons</a></li>  
        </ul>  
    </li><li><a href="#">ENFANTS</a>  
        <ul>  
            <li><a href="indexefveste.php">Manteau, blouson</a></li>  
            <li><a href="#">T-shirt, polo</a></li>  
            <li><a href="indexefchemise.php">Chemise</a></li>  
        </ul>  
    </li>  
	<li><a href="promotion.php">Promotion</a>  
        <ul>  
        </ul>  
    </li>  
	<li><a href="contact.php">Contacte-Nous</a>  
        <ul>  
        </ul>  
    </li>  
</ul>
</div>
<table width="80%" height="100" border="0" align="center">
<tr>
  <th height="784" align="left" valign="top" scope="col"><table width="100%" height="140" border="0" bordercolor="#89CE1B">
      <tr>
        <th class="style6" scope="col"><img src="logo.png" height="100" width="600" /></th>
      </tr>
   
   </table>
    <a href="indexr.html">Accueil</a>
<form action="detaill.php" method="post">
  <table width="1000" border="0">
  <tr>
    <td colspan="2" class="tt">INFORMATIONS DE CLIENT:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="223">NOM :</td>
    <td width="246"><input name="nom_c" type="text" required id="nom_c" size="35" maxlength="35" /></td>
    <td width="180">CODE POSTAL:</td>
    <td width="323"><input name="codepo" type="text" id="codepo" size="49" required /></td>
  </tr>
  <tr>
    <td>PRENOM:</td>
    <td><input name="pre" type="text" id="pre" size="49" required /></td>
    <td>PAYER</td>
    <td><input name="pay" type="text" id="pay" size="49" required /></td>
  </tr>
  <tr>
    <td>TELEPHONE:</td>
    <td><input name="tel" type="text" id="tel" size="49" required /></td>
    <td>VILLE</td>
    <td><input name="ville" type="text" id="ville" size="49" required /></td>
  </tr>
  <tr>
    <td>E-MAIL:</td>
    <td><input name="email" type="text" id="email" size="49" required /></td>
    <td>ADRESSE</td>
    <td><input name="adre" type="text" id="adre" size="49" required /></td>
  </tr>
</table>

    <p class="tt">INFORMATIONS DE COMMANDE</p>
    <table border="0" height="751" width="949">
      <tr>
        <td height="250" colspan="2" valign="top" class="style6 style9"><?php if (!$listeproduit){?>
            <p>votre panier est vide</p>
          <?php }else {?>
            <table width="101%" class="tableau zebre">
              <tr>
                <td><center> Nom D'Article</center></td>
                <td><center>Prix D'Article</center></td>
                <td><center>Taux Tva D'Article</center></td>
                <td><center>Quantite</center> </td>
                <td><center>Total D'Article</center></td>
			    <td><center>Modifier Article</center></td>
			    <td><center>Supprimer Article</center></td>
              </tr>
              <?php foreach($listeproduit as $service){?>
              <tr>
                <td><center><?php print $services['Nom_S']?></center></td>
                <td><center><?php print $services['Prix_S']?></center></td>
                <td><center><?php print $services['tva']?>%</center></td>
              
                  
                <? 
$prix=$services['Prix_S'];

$tva=$services['tva'];
$id_comn=$services['id_comn'];
$id_clt=$services['id_clt'];

	$totale=(1*$prix) ;
	$soustotale=($totale + $soustotale);
	$totaletva=(($totale*$tva)/100 +$totaletva);
	$totalglobale=($soustotale+$totaletva);
	$totallv=($totalglobale*7)/100;
	$totalco=($totallv+$totalglobale);
	
	?>
                <td><?php print $totale?></td>
                <td><div align="center"><a href="produit.php?id=<?php print $produit['id']?>"><img src="icone-commande.png" width="30" height="30" /></a></div>
                <td> <div align="center"><a href="supprimer.php?id=<?php print $produit['id']?>"><img src="shopping_basket_remove_256.png" width="30" height="30" /></a></div></td>
              </tr>
              <tr>
                <?php }?>
              </tr>
        </table>
        </td>
      </tr>
          <em>
          <tr>
          </em>
      
        <td width="574" valign="top" class="style6">
		
		<input type="submit" name="ajouter"  value="valider" onClick="return(confirm('Etes-vous sûr de vouloir envoyer cette Commande?'));""/><br>
		
		

	 
	 
	   
        
		</td>
        <td width="359" valign="top"><table width="97%" border="0" align="left">
          <tr>
            <th width="50%"  class="style6" scope="row"><div align="left"><span class="style4"><font color=#000000 face='Bookman Old Style'>Prix Hors Taxe:</font></span></div></th>
            <td width="50%" class="style6"><font color=#000000 face='Bookman Old Style'><?php print $soustotale?></font> <span class="style8">DHs</span></td>
          </tr>
          <tr>
            <th  scope="row"><div align="left" class="style6"><font color=#000000 face='Bookman Old Style'>Total Tva :</font></div></th>
            <td><font color=#000000 face='Bookman Old Style'><?php print $totaletva?></font> <span class="style8">DHs</span></span></td>
          </tr>
          <tr>
            <th  scope="row"><div align="left"><span class="style7"><font color=#000000 face='Bookman Old Style'>TOTAL TTC:</font></span></div></th>
            <td><font color=#000000 face='Bookman Old Style'><?php print $totalglobale?></font> <span class="style8">DHs</span></td>
          </tr>
        </table>
          <p>&nbsp;</p>
            <p><br />
              <br />
			  <?
			  if ($totalglobale > 10000)  {
   echo "<font color=grenn face='Bookman Old Style'>la liverisone est gratuit <br><br>"; 
    echo "<font color=red face='Bookman Old Style'>Total De Commande avec la liverison $totalglobale.DH</font>";
   }
 else {
 
   echo "<font color=#000000 face='Bookman Old Style'>Frais de port&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$totallv.DH</font></b><br><br><br>";  
   echo "<font color=red face='Bookman Old Style'>Total De Commande avec la liverison $totalco.DH</font>";
 }
 ?>
              <br />
			  <?php
			
			  ?>
            </p></td>
          <em>
          </tr>
          </em>
          </table>
    
<input type="text" name="id_comnn" value="<?php echo $row_Recordset1['']; ?>" />
<input type="text" name="id_cltt" value="<?php echo $row_Recordset1['']; ?>"  />



<input type="submit" name="ajouter"  value="valider" onClick="return(confirm('Etes-vous sûr de vouloir envoyer cette Commande?'));""/>
<a href="productos.php">telecharger</a>
</form>

<a href ='indexe.php'>accueil</a>
<?php } ?>
</body>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
