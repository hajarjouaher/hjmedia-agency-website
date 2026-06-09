<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['Mot_de_passe'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$Mot_de_passe = validate($_POST['Mot_de_passe']);

	if (empty($username)) {
		header("Location: admin.php?error=User Name is required");
	    exit();
	}else if(empty($Mot_de_passe)){
        header("Location: admin.php?error=Votre nom est incorrect");
	    exit();
	}else{
		$sql = "SELECT * FROM login WHERE username='$username' AND Mot_de_passe='$Mot_de_passe'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['Mot_de_passe'] === $Mot_de_passe) {
            	
				header("Location: ../index.html");

		        exit();
            }else{
				header("Location: admin.php?error=Votre MTP est incorrect");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Votre MTP est incorrect");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}