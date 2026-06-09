<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="projet";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
?>