<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $Nom = $_POST['Nom'];
  $Categorie = $_POST['Categorie'];
  $Email = $_POST['Email'];
  $Mot_de_passe = $_POST['Mot_de_passe'];
  


  $sql = "UPDATE `admin` SET `Nom`='$Nom',`Categorie`='$Categorie',`Email`='$Email',`Mot_de_passe`='$Mot_de_passe' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: Gestion_admin.php");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="style3.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="style1">

  <title></title>

  <style>

.background{
      width: 100%;
      height: 100vh;
      position: absolute;
      background: url(2.png) no-repeat;
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
	background: #F7F7F7;
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
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
	box-shadow: 0 0 5px #43D1AF;
	padding: 3%;
	border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"]{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #ca6328;
    border-bottom: 2px solid #b13b22;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;
    color: #fff;
    FONT-SIZE: 18px;
}
.my-btn-class-36 {left: 122px; align-items: center; appearance: none; background-clip: padding-box; background-color: initial; background-image: none; border-style: none; box-sizing: border-box; color: rgb(255, 255, 255); cursor: pointer; display: inline-block; flex-direction: row; flex-shrink: 0; font-family: Eina01, sans-serif; font-size: 16px; font-weight: 800; justify-content: center; line-height: 24px; margin: 0px; min-height: 64px; outline: none; overflow: visible; padding: 19px 26px; pointer-events: auto; position: relative; text-align: center; text-decoration: none; text-transform: none; user-select: none; touch-action: manipulation; vertical-align: middle; width: auto; word-break: keep-all; z-index: 0; }
.my-btn-class-36:hover { background-clip: padding-box; background-color: initial; background-image: none; }
.my-btn-class-36:active { background-clip: padding-box; background-color: initial; background-image: none; color: rgb(204, 204, 204); }
.my-btn-class-36::before { background-color: rgba(249, 58, 19, 0.32); content: ""; display: block; height: 100%; left: 0px; overflow: hidden; position: absolute; top: 0px; width: 100%; z-index: -2; border-radius: 80px; }
.my-btn-class-36::after { background-color: initial; background-image: linear-gradient(92.83deg, rgb(255, 116, 38) 0px, rgb(249, 58, 19) 100%); inset: 4px; content: ""; display: block; overflow: hidden; position: absolute; transition: all 100ms ease-out 0s; z-index: -1; border-radius: 80px; }
.my-btn-class-36:hover::after { inset: 0px; transition-timing-function: ease-in; }
.my-btn-class-36:active::after { background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), linear-gradient(92.83deg, rgb(255, 116, 38) 0px, rgb(249, 58, 19) 100%); inset: 4px; }


.my-btn-class-37 {left: 150px; align-items: center; appearance: none; background-clip: padding-box; background-color: initial; background-image: none; border-style: none; box-sizing: border-box; color: rgb(255, 255, 255); cursor: pointer; display: inline-block; flex-direction: row; flex-shrink: 0; font-family: Eina01, sans-serif; font-size: 16px; font-weight: 800; justify-content: center; line-height: 24px; margin: 0px; min-height: 64px; outline: none; overflow: visible; padding: 19px 26px; pointer-events: auto; position: relative; text-align: center; text-decoration: none; text-transform: none; user-select: none; touch-action: manipulation; vertical-align: middle; width: auto; word-break: keep-all; z-index: 0; }
.my-btn-class-37:hover { background-clip: padding-box; background-color: initial; background-image: none; }
.my-btn-class-37:active { background-clip: padding-box; background-color: initial; background-image: none; color: rgb(204, 204, 204); }
.my-btn-class-37::before { background-color: rgba(249, 58, 19, 0.32); content: ""; display: block; height: 100%; left: 0px; overflow: hidden; position: absolute; top: 0px; width: 100%; z-index: -2; border-radius: 80px; }
.my-btn-class-37::after { background-color: initial; background-image: linear-gradient(92.83deg, rgb(255, 116, 38) 0px, rgb(249, 58, 19) 100%); inset: 4px; content: ""; display: block; overflow: hidden; position: absolute; transition: all 100ms ease-out 0s; z-index: -1; border-radius: 80px; }
.my-btn-class-37:hover::after { inset: 0px; transition-timing-function: ease-in; }
.my-btn-class-37:active::after { background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), linear-gradient(92.83deg, rgb(255, 116, 38) 0px, rgb(249, 58, 19) 100%); inset: 4px; }


</style>
</head>

<body>
<div class="background">


  <div class="container">
    <?php
    $sql = "SELECT * FROM `admin` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
<form method="POST">
        <div class="form-style-6">
            <h1> Modifier le Informations admin </h1>
            <form>
            <input type="text" name="Nom" placeholder="Entrez le Nom" value="<?php echo $row['Nom'] ?>" />
            
            <label for="Categorie">Categorie :</label>
            <select id="Categorie" name="Categorie" value="">
            <option value="A"<?php if($user['Categorie'] == 'A') { ?> selected="selected"<?php } ?>>A</option>
            <option value="B"<?php if($user['Categorie'] == 'B') { ?> selected="selected"<?php } ?>>B</option>
            <option value="D"<?php if($user['Categorie'] == 'D') { ?> selected="selected"<?php } ?>>D</option>
            
            </select>
            <input type="email" name="Email" placeholder="Entrez le Email" value="<?php echo $row['Email'] ?>"/>
            <input type="text" name="Mot_de_passe" placeholder="Entrez le Mor de passe" value="<?php echo $row['Mot_de_passe'] ?>"/>
            
            <button type="submit" class="my-btn my-btn-class-36" name="submit">Valide</button>

            <button class="my-btn my-btn-class-37"><a href="./Gestion_admin.php">Annuler</a></button>
            </form>
            </div>
    </div>
  </div>
  </div>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>