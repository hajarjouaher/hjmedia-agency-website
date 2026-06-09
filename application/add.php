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
    

    if($username == "" || $Mot_de_passe =="" ){

        echo "
            <script>
                alert('All Field Can Not Empty');
            </script>
        ";
    }


    $sql = "INSERT INTO login (username, Mot_de_passe) VALUES ('$username', '$Mot_de_passe')";

    $result = $connect->query($sql);
    if (!$result) {
        die("Error Add Data");
    }

    header('location: ./gestion_admin.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            width: 70%;
            margin: 267px auto;
        }

        .head {
            background-color: gray;
            color: white;
        }

        button {
            padding: .5rem 1rem;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: .2rem;
        }

        .edit {
            background-color: blue;
        }

        .delete {
            background-color: red;
        }

        .add {
            background-color: #3089d7;
            margin-bottom: 1rem;
            font-size: 18px;

        }

        a {
            color: white;
            text-decoration: none;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 30rem;
            margin: auto;
        }

        input {
            padding: .5rem 2rem;
            margin-bottom: .5rem;
            border-radius: 142.2px;
        }

        .background{
      width: 100%;
      height: 100vh;
      position: absolute;
      background: url(5.png) no-repeat;
      background-size: cover;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
        }
    </style>

</head>
<body>
<div class="background">
    <div class="container">

        <form method="POST">

            <input placeholder="Entrez le Email..." name="username" value="" />
            <input placeholder="Entrez le Mot de passe..." name="Mot_de_passe" value="" />
            <button class="add" type="submit">Valide</button>


        </form>
        
    </div>
    </div>
</body>
</html>