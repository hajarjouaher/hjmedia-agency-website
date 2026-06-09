<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `contact` WHERE ID_c = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Gestion_contact.php");
} else {
  echo "Failed: " . mysqli_error($conn);
}
