<?php 
//Databse Connection file

include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $tva=$_POST['tva'];
    $add=$_POST['address'];
   $ppic=$_FILES["profilepic"]["name"];
   

// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".mp4",".mp3");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/ mp4 /mp3 format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"../".$imgnewfile);
// Query for data insertion
$query=mysqli_query($con, "insert into  services(Nom_S,Type_S, Prix_S, Desc_S, tva,Photo_S) value('$fname','$lname', '$contno', '$add', '$tva','$imgnewfile' )");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>PHP Crud Operation!!</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: -319px auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #ffffff;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 52px;
    background: #f8f9fa;
	
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #000;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #2c8dd6;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
.background{
      width: 100%;
      height: 100vh;
      position: absolute;
      background: url(3.png) no-repeat;
      background-size: cover;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
  }
  .bn632-hover {
	width: 160px;
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    height: 43px;
    text-align: center;
    border: none;
    background-size: 300% 100%;
    border-radius: 6px;
    
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
    margin: 161px;
}
.bn632-hover:hover {
  background-position: 100% 0;
 
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn26 {
  background-image: linear-gradient(
    to right,
    #2e8bd6, #007bff,
    #04befe,
    #3f86ed
  );
  box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
</style>
</head>
<body>
<div class="background">
<a href="./index.php"><button class="bn632-hover bn26">Returne</button></a>

<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data" >
		<h2>Ajoute de Services</h2>
		<p class="hint-text"></p>
        <div class="form-group">
			<div class="row">
			
                        
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="Nom Services" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Type Services" required="true"></div>
			</div>  
			<div class="form-group">
		<input type="text" class="form-control" name="contactno" placeholder="Prix Services" required="true" >
        </div>
		       	
        </div>
		<div class="form-group">
		<textarea class="form-control" name="address" placeholder="Description Services" required="true"></textarea>
        </div> 
		<div class="form-group">
		<input type="text" class="form-control" name="tva" placeholder="tva Services" required="true" >
        </div>
             <div class="form-group">
        	<input type="file" class="form-control" name="profilepic"  required="true">
        	<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
        </div>      
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">Affiche total Services  <a href="index.php">Afficher</a></div>
</div>
</div>

</body>
</html>