<?php

$host = "localhost";
$username  = "root";
$password = "root";
$db = "projet";

$connect = new mysqli($host, $username, $password, $db);
if ($connect->connect_error) {
    die("Error Connect to DB" . $connect->connect_error);
}

$username = "";
$Mot_de_passe = "";



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $Mot_de_passe = $_POST['Mot_de_passe'];

    if($username == "" || $Mot_de_passe ==""  ){

        echo "
            <script>
                alert('All Field Can Not Empty');
            </script>
        ";
    }


    $sql = "INSERT INTO admin_appli (username,Mot_de_passe ) VALUES ('$username', '$Mot_de_passe')";

    $result = $connect->query($sql);
    if (!$result) {
        die("Error Add Data");
    }

    header('location: Gestion_admin.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .background{
      width: 100%;
      height: 100vh;
      position: absolute;
      background: url(A.png) no-repeat;
      background-size: cover;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
        }
        .form-style-6{
	font: 95% Arial, Helvetica, sans-serif;
    max-width: 535px;
    margin: 104px auto;
    padding: 16px;
	
}
.form-style-6 h1{
    background: #9f1d1d;;
	padding: 20px 0;
	font-size: 150%;
	font-weight: 800;
	text-align: center;
	color: #fff;
	margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select 
{
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	background: #fff;
	margin-bottom: 4%;
	border: 1px solid #ccc;
	padding: 3%;
	color: #555;
	font: 95% Arial, Helvetica, sans-serif;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
label {
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
}

div {
  border-radius: 5px;
  padding: 20px;
  padding-left: 197px;
    padding-right: 151px;
    padding-top: 53px;
}
    </style>

</head>
<body>
<div class="background">
    <div class="container">
    <form method="POST">
        <div class="form-style-6">
            <form>
            <label for="username">username :</label>
    <input type="text" id="username" name="username" placeholder="" value="">

    <label for="Mot_de_passe">Mot de passe :</label>
    <input type="text" id="Mot_de_passe" name="Mot_de_passe" placeholder=""value="">

    <input type="submit" name="submit" value="Submit">

            </form>
            </div>
    </div>
  </div>
    </div>
</body>
</html>