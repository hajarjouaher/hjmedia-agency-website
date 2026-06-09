<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $username = $_POST['username'];
  $Mot_de_passe = $_POST['Mot_de_passe'];
  $sql = "UPDATE `admin_appli` SET `username`='$username',`Mot_de_passe`='$Mot_de_passe' WHERE id = $id";

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
      background: url(A.png) no-repeat;
      background-size: cover;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
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

.f{
  align-items: center;
}
</style>
</head>

<body>
<div class="background">


  <div class="container">
    <?php
    $sql = "SELECT * FROM `admin_appli` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
<form method="POST">
        <div class="form-style-6">
            <form>
            <label for="username">username</label>
    <input type="text" id="username" name="username" placeholder="" value="<?php echo $row['username'] ?>">

    <label for="Mot_de_passe">Mot de passe</label>
    <input type="text" id="Mot_de_passe" name="Mot_de_passe" placeholder=""value="<?php echo $row['Mot_de_passe'] ?>">

    <input type="submit" name="submit" value="Submit">

            </form>
            </div>
    </div>
  </div>
  </div>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>