<?php 
include "connection.php";
if (isset($_GET['sID'])) {
  $sID = $_GET['sID'];
$sql = "DELETE FROM `services` WHERE `sID` = $sID";
$result = mysqli_query($conn, $sql);

// Check if the deletion was successful
if ($result) {
  echo "Product deleted successfully.";
  header('Location: admin.php');
  exit; // Stop further execution

} else {
  echo "Error deleting product: " . mysqli_error($conn);
}
}
?>