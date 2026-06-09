<?php 
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
session_start();
$mysql=new mysqli('localhost','root','root','projet');
$result=$mysql->query('select * from services where Id_S='.$_GET['Id_S']);
$resultat=mysql_query("SET NAMES utf8 ");
$resultat=mysql_query("SET CHARACTER SET utf8 ");
$rows =$result->fetch_assoc();
require_once 'panier.php';
$panier=new panier('services');
$qte=1;
if($produitpanier=$panier->get($_GET['Id_S'])){

}
?>
<?php
		// get all the product details
		{ 
      
		
		  $image = $rows["Photo_S"];
			 $product_name = $rows["Nom_S"];
			 $price = $rows["Prix_S"];
			 $details = $rows["tva"];
			 $category = $rows["Type_S"];
			 $inform = $rows["Desc_S"];
			 
			// $tail1=$produit["tail1"];
			//  $tail2=$produit["tail2"];
			  // $tail3=$produit["tail3"];
			   // $tail4=$produit["tail4"];
			// $subcategory = $row["subcategory"];
			 //$date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
         }
		 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style_P_D.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<sheet" type="text/css" href="revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />

<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="../css image hover effect/css/dd.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>
		.main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
		h3{background-color: #4294D1; color: #f7f7f7; padding: 10px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35); font-size: 40px; margin-right: -5px;}
		.imge-box{margin-top: 20px;}
		.imge-block{float: left; margin-right: 5px; text-align: center;}
		p{margin-top: 0;}
		img{width: 375px;  margin-bottom: 10px;   }
    .logo img {height: 60px; width: 200px;}



.wrapper {
	max-width: 1000px;
	margin: 0 auto;
}
.wrapper h1 {
	padding: 20px 0;
	text-align: center;
	text-transform: uppercase;
}
.project {
	display: inline-block;
}
.shop {
	flex: 75%;
}
.box {
	display: flex;
	width: 100%;
  height: 367px;
	overflow: hidden;
	margin-bottom: -104px;
	background: #fff;
	transition: all .6s ease;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.box:hover {
	border: none;
	transform: scale(1.01);
}
.box img {
	width: 473px;
    height: 421px;
    object-fit: cover;
    margin-top: -25px;
}
.content {
	padding: 20px;
	width: 100%;
	position: relative;
  margin-top: -43px;
}
.content h3 {
	margin-bottom: 30px;
}
.content h4 {
	margin-bottom: 1px;
}
.btn-area {
	position: absolute;
	bottom: 20px;
	right: 20px;
	padding: 10px 25px;
	background-color: #3a71a9;
	color: white;
	cursor: pointer;
	border-radius: 5px;
}
.btn-area:hover {
	background-color: #76bfb6;
	color: #fff;
	font-weight: 600;
}
.unit input {
	width: 40px;
	padding: 5px;
	text-align: center;
}
.btn-area i {
	margin-right: 5px;
}
.right-bar {
	flex: 25%;
	margin-left: 20px;
	padding: 20px;
	height: 400px;
	border-radius: 5px;
	background: #fff;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.right-bar hr {
	margin-bottom: 25px;
}
.right-bar p {
	display: flex;
	justify-content: space-between;
	margin-bottom: 30px;
	font-size: 20px;
}
.right-bar a {
	background-color: #76bfb6;
	color: #fff;
	text-decoration: none;
	display: block;
	text-align: center;
	height: 40px;
	line-height: 40px;
	font-weight: 900;
}
button[disabled],
html input[disabled] {
  
  cursor: default;
    color: #f8f9fa;
    background-color: #4294d1;
}
.right-bar i {
	margin-right: 15px;
}
.lettre{
  font-family: inherit;
    /* font-weight: 500; */
    line-height: 1.1;
    color: inherit;
}
.color{
  color: #4294D1;
}
.right-bar a:hover {
	background-color: #3972a7;
}
@media screen and (max-width: 700px) {
	.content h3 {
		margin-bottom: 15px;
	}
	.content h4 {
		margin-bottom: 20px;
	}
	.btn2 {
		display: none;
	}
	.box {
		height: 150px;
	}
	.box img {
		height: 150px;
		width: 200px;
	}
}
@media screen and (max-width: 900px) {
	.project {
		flex-direction: column;
	}
	.right-bar {
		margin-left: 0;
		margin-bottom: 20px;
	}
}
@media screen and (max-width: 1250px) {
	.wrapper {
		max-width: 95%;
	}
}

.button-18 {
  align-items: center;
  background-color: #0A66C2;
  border: 0;
  border-radius: 100px;
  box-sizing: border-box;
  color: #ffffff;
  cursor: pointer;
  display: inline-flex;
  font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 20px;
  max-width: 480px;
  min-height: 40px;
  min-width: 0px;
  overflow: hidden;
  padding: 0px;
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  touch-action: manipulation;
  transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
}

.button-18:hover,
.button-18:focus { 
  background-color: #16437E;
  color: #ffffff;
}

.button-18:active {
  background: #09223b;
  color: rgb(255, 255, 255, .7);
}

.button-18:disabled { 
  cursor: not-allowed;
  background: rgba(0, 0, 0, .08);
  color: rgba(0, 0, 0, .3);
}
	</style>
</head>
<body id="default_theme" class="it_service service">

<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">3éme étage,Av.Enakhil, Fquih Ben Sleh 23200</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">Hjmedia@gamil.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="make_appointment.html">Prendre un rendez-vous</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
              <li> <a  href="index.html">Accueil</a>
                  
                  </li>
                  <li><a href="it_about.html">Qui Somme Nous?</a></li>
                  <li> <a class="active" href="http://localhost/hajar/it_service.php">Nos Services</a>
                    
                  </li>
                  <li> <a href="it_blog.html">Les Meilleurs Blogs</a>
                    
                  </li>
                  
                  <li> <a href="it_contact.html">Contactez Nous</a>
                  </li>
              </ul>
                  
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Services</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Accueil</a></li>
                <li class="active">Services</li>
              </ol>
            </div>
          </div>
        </div>
     </table>
<form action="aj.php" method="post">
<br />
<a href="ajoutdetail.php"></a>
<div align="center" id="mainWrapper">
  <div id="pageContent">
  <div class="project">
			<div class="shop">
				<div class="box">
					<img src="<?php echo $image; ?>">
					<div class="content">
						<h3 class="lettre"><?php echo $product_name; ?></h3>
						<h4 class="lettre"> Prix Hors Taxe: <?php echo $price."DHs"; ?></h4>
            <h4 class="lettre">Categorie: <?php echo $category; ?></h4>
						<h4 class="lettre">TVA: <?php echo $details; ?></h4>
						<h4 class="lettre">Description: <?php echo $inform; ?></h4>
            

            <button class="button-18" role="button"><a href="it_devis.php" style="text-decoration: none ; color: #F9F9F9;">Demandez un demande de devis </a></button>

            
	 <?php 

  
?>        
           
        
        
</form>

            
						
						
					</div>
				</div>
        </div>
        </div>
  </div>
  
</div>
	

	
	<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div id="map"></div>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>HjMedia&nbsp;</h2>
            </div>
            <p>Nou sommes une agence de communication à Fquih ben salah ,nous sommes spécialisés dans la création et développement de sites web , applications mobile et desktop personnalisés ainsi que dans le E-mareketing, nous travaillons sur le e-réputation moyennant des outils et des méthodes d'actualité.&nbsp;</p>
            <ul class="social_icons">
         
            <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Liens supplémentaires</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i>Qui Sommes Nous?</a></li>
              <li><a href="it_service.php"><i class="fa fa-angle-right"></i> Notre services</a></li>
              <li><a href="it_blog.html"><i class="fa fa-angle-right"></i> Notre meilleurs Blogs</a></li>
              <li><a href="file:///C:/AppServ/www/it-next1/it_contact.html"><i class="fa fa-angle-right"></i> Contactez-nous</a></li>
              
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Les Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i>Création des sites E-Commerce</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Création des sites web vitrine </a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Graphique désign</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i>Création des Application Mobile</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> #
Création des Applications Desktop</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contactez nous</h2>
            </div>
            <p><br><a href="https://mail.google.com/mail/u/0/#inbox"> Hjmedia@gamil.com   </a> <br>          <span style="font-size:18px;"><a href="tel:+00212648444707"><a href="tel:00212648444707">00212648444707</a></a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>Votre agence HjMedia a votre service</p>
      </div>
    </div>
  </div>
</footer>

<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 32.505483, lng: -6.686870},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 32.505483, lng: -6.686870},
             map: map,
             icon: image
           });
         }
      </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
