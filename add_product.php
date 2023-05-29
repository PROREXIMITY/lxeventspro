<?php
session_start();
include 'connection.php';
// if (!isset($_SESSION['uType']) || $_SESSION['uType'] !== 'Admin') {
// 	// User is not authenticated or is not a passenger user, redirect to login page
// 	header('Location: login.php');
// 	exit();
// }
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the product details from the form
  
  // Process the uploaded photo
  $targetDirectory = "assets/img/"; // Specify the directory where the uploaded images will be stored
  $targetFile = $targetDirectory . basename($_FILES["pPhoto"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $photo = basename($_FILES["pPhoto"]["name"]);
  // Check if the file is an actual image
  $check = getimagesize($_FILES["pPhoto"]["tmp_name"]);
  if ($check !== false) {
    $uploadOk = 1;
  } else {
    echo "Error: File is not an image.";
    $uploadOk = 0;
  }

//   // Check if the file already exists
//   if (file_exists($targetFile)) {
//     echo "Error: File already exists.";
//     $uploadOk = 0;
//   }

//   // Check the file size (adjust the limit as per your requirements)
//   if ($_FILES["pPhoto"]["size"] > 500000) {
//     echo "Error: File size is too large.";
//     $uploadOk = 0;
//   }

  // Allow only specific image file formats (you can add more if needed)
  if (
    $imageFileType != "jpg" &&
    $imageFileType != "jpeg" &&
    $imageFileType != "png"
  ) {
    echo "Error: Only JPG, JPEG, and PNG files are allowed.";
    $uploadOk = 0;
  }

  // Check if the file was successfully uploaded
  if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["pPhoto"]["tmp_name"], $targetFile)) {
      // File uploaded successfully, now insert the product details into the database

      // Prepare the SQL statement
      $sql = "INSERT INTO `services` (photo) VALUES ('$photo')";

      // Execute the SQL statement
      if (mysqli_query($conn, $sql)) {
        echo "Product added successfully.";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else {
      echo "Error: Failed to upload the file.";
    }
  }
}
?>

<!-- HTML form for adding a new product -->
<form action="add_product.php" method="POST" enctype="multipart/form-data">
 

  <label for="pPhoto">Add Photo:</label>
  <input type="file" name="pPhoto" required><br><br>

  <input type="submit" value="Add Product">
</form>
<div class="center">
    <a class="back-button" href="admin.php">Back</a>
	</div>