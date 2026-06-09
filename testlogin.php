<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['Mot_de_passe'])){
$error = "Login or Mot de pass est Incorrect";
echo"$error";
}
else
{
//Define $user and $pass
$username=$_POST['username'];
$Mot_de_passe=$_POST['Mot_de_passe'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "root");
//Selecting Database
$db = mysqli_select_db($conn, "projet");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM login WHERE Mot_de_passe='$Mot_de_passe' AND   username ='$username'");

$rows = mysqli_num_rows($query);
if($rows == 1){
header("location:it_service_list.html"); // Redirecting to other page
}
else
{
$error = "Le nom ou le niveau ou le mot de passe sont incorrect";
echo"$error";
}
mysqli_close($conn); // Closing connection
}
}

?>