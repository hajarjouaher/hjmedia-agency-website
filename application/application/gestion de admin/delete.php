<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `admin_appli` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Gestion_admin.php");
} else {
  echo "Failed: " . mysqli_error($conn);
}
