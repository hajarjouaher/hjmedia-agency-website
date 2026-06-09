<?php
    $connect = mysqli_connect("localhost", "root", "root", "projet");
    $query = "SELECT * FROM contact ORDER BY ID_c DESC";
    $result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Glassmorphism login Form Tutorial in html css</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style_P.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    
    <!--Stylesheet-->
    <style media="screen">
   
  .background{
      width: 100%;
      height: 100vh;
      position: absolute;
      background: url(4.png) no-repeat;
      background-size: cover;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
  }
  
  body{
	height:100vh;
	background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
}
table { 
	width: 850px; 
	border-collapse: collapse; 
	margin: -187px auto;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 12px;
	
	}
th { 
	background: #2497d4; 
	color: white; 
	font-weight: bold; 
	border-bottom:2px solid#4158D0 ;
	}

td, th { 
	padding: 30px 10px; 
	text-align: center; 
	font-size: 15px;
	text-align: center;
	padding-bottom: 12px;
    padding-top: 14px;
	}
	td{
		background-color: #4370db;
		color:#fff;
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

	.bn632-hover {
  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 200px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
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
    #25aae1,
    #4481eb,
    #04befe,
    #3f86ed
  );
  box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
      </style>

</head>
<body>
    <div class="background">
	<a href="./page_app.html"><button class="bn632-hover bn26">Retorn</button></a>

      <div class="container">
        <table class="table text-center table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php 
                while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                        echo "<td>".$row["ID_c"]."</td>";
                        echo "<td>".$row["pre"]."</td>";
                        echo "<td>".$row["nom"]."</td>";
                        echo "<td>".$row["tel"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td class='text-start'>".$row["msg"]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    </div>
    
</body>
</html>
<!-- partial -->
  
</body>
</html>
