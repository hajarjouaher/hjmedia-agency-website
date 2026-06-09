<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  

  

  <title>PHP CRUD Application</title>

  <style media="screen">
   
   
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
  
 
table { 
  width: 1262px;
	border-collapse: collapse; 
  margin: 122px auto;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 12px;
	
	}
th { 
  background: #2399d4;
    color: white;
    font-weight: bold;
    
	}

td, th { 
	padding: 30px 10px; 
	Font-size: 19px;
    text-align: center;
    padding-bottom: 1px;
    padding-top: 7px;
	}
	td{
    background-color: #59cae4;
    color: #fff;
	}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	
	}

	td:before { 
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		content: attr(data-column);
		color: #000;
		font-weight: bold;
	}

}
.credit a{
	text-decoration: none;
	color: #fff;
	font-weight: 800;
	}
	
	.credit {
	  font-family: Verdana, Geneva, Tahoma, sans-serif;
	  margin: 10px;
	  color:#fff;
	  text-align: center;
	}

      
.my-btn-class-46 { top: 112px;
    left: 159px;align-items: center; appearance: none; background-image: radial-gradient(100% 100% at 100% 0px, rgb(90, 218, 255) 0px, rgb(84, 104, 255) 100%); border: 0px; border-radius: 6px; box-shadow: rgba(45, 35, 66, 0.4) 0px 2px 4px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgba(58, 65, 111, 0.5) 0px -3px 0px inset; box-sizing: border-box; color: rgb(255, 255, 255); cursor: pointer; display: inline-flex; font-family: "JetBrains Mono", monospace;     height: 40px; justify-content: center; line-height: 55px; overflow: hidden; padding-left: 16px; padding-right: 16px; position: relative; text-decoration: none; transition: box-shadow 0.15s ease 0s, transform 0.15s ease 0s; user-select: none; touch-action: manipulation; white-space: nowrap; will-change: box-shadow, transform; font-size: 18px; }
.my-btn-class-46:focus { box-shadow: rgb(60, 79, 224) 0px 0px 0px 1.5px inset, rgba(45, 35, 66, 0.4) 0px 2px 4px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgb(60, 79, 224) 0px -3px 0px inset; }
.my-btn-class-46:hover { box-shadow: rgba(45, 35, 66, 0.4) 0px 4px 8px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgb(60, 79, 224) 0px -3px 0px inset; transform: translateY(-2px); }
.my-btn-class-46:active { box-shadow: rgb(60, 79, 224) 0px 3px 7px inset; transform: translateY(2px); }

.my-btn-class-47 { top: -3px;
    left: 159px;align-items: center; appearance: none; background-image: radial-gradient(100% 100% at 100% 0px, rgb(90, 218, 255) 0px, rgb(84, 104, 255) 100%); border: 0px; border-radius: 6px; box-shadow: rgba(45, 35, 66, 0.4) 0px 2px 4px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgba(58, 65, 111, 0.5) 0px -3px 0px inset; box-sizing: border-box; color: rgb(255, 255, 255); cursor: pointer; display: inline-flex; font-family: "JetBrains Mono", monospace;     height: 40px; justify-content: center; line-height: 55px; overflow: hidden; padding-left: 16px; padding-right: 16px; position: relative; text-decoration: none; transition: box-shadow 0.15s ease 0s, transform 0.15s ease 0s; user-select: none; touch-action: manipulation; white-space: nowrap; will-change: box-shadow, transform; font-size: 18px; }
.my-btn-class-47:focus { box-shadow: rgb(60, 79, 224) 0px 0px 0px 1.5px inset, rgba(45, 35, 66, 0.4) 0px 2px 4px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgb(60, 79, 224) 0px -3px 0px inset; }
.my-btn-class-47:hover { box-shadow: rgba(45, 35, 66, 0.4) 0px 4px 8px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgb(60, 79, 224) 0px -3px 0px inset; transform: translateY(-2px); }
.my-btn-class-47:active { box-shadow: rgb(60, 79, 224) 0px 3px 7px inset; transform: translateY(2px); }

.my-btn-class-48 {     top: -3px;
    left: 159px;align-items: center; appearance: none; background-image: radial-gradient(100% 100% at 100% 0px, rgb(90, 218, 255) 0px, rgb(84, 104, 255) 100%); border: 0px; border-radius: 6px; box-shadow: rgba(45, 35, 66, 0.4) 0px 2px 4px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgba(58, 65, 111, 0.5) 0px -3px 0px inset; box-sizing: border-box; color: rgb(255, 255, 255); cursor: pointer; display: inline-flex; font-family: "JetBrains Mono", monospace; height: 40px; justify-content: center; line-height: 55px; overflow: hidden; padding-left: 16px; padding-right: 16px; position: relative; text-decoration: none; transition: box-shadow 0.15s ease 0s, transform 0.15s ease 0s; user-select: none; touch-action: manipulation; white-space: nowrap; will-change: box-shadow, transform; font-size: 18px; }
.my-btn-class-48:focus { box-shadow: rgb(60, 79, 224) 0px 0px 0px 1.5px inset, rgba(45, 35, 66, 0.4) 0px 2px 4px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgb(60, 79, 224) 0px -3px 0px inset; }
.my-btn-class-48:hover { box-shadow: rgba(45, 35, 66, 0.4) 0px 4px 8px, rgba(45, 35, 66, 0.3) 0px 7px 13px -3px, rgb(60, 79, 224) 0px -3px 0px inset; transform: translateY(-2px); }
.my-btn-class-48:active { box-shadow: rgb(60, 79, 224) 0px 3px 7px inset; transform: translateY(2px); }     
      </style>
</head>

<body>
<div class="background">
  
<a href="../page_app.html" class="link-dark"><button class="my-btn my-btn-class-46">accueil</button></a>
<a href="./add.php" class="link-dark"><button class="my-btn my-btn-class-46">Ajoute admin</button></a>


  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">username</th>
          <th scope="col">Mot_de_passe</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sqll = "SELECT * FROM admin_appli";
        $result = mysqli_query($conn, $sqll);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["Mot_de_passe"] ?></td>
            
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><button class="my-btn my-btn-class-47">Modifier</button></a>

              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><button class="my-btn my-btn-class-48">Supprimer</button></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>