<?php
session_start();
include 'connection.php';

if(isset($_POST['uEmail']) && isset($_POST['uPass'])){

	$uEmail = $_POST['uEmail'];
	$uPass = $_POST['uPass'];

	$sql = "SELECT * FROM `user` WHERE `uEmail` = '$uEmail' AND `uPass` = '$uPass'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 1){
		// Login success
		$row = mysqli_fetch_assoc($result);
		$_SESSION['userID'] = $row['userID'];
		$_SESSION['uType'] = $row['uType'];
		$_SESSION['uName'] = $row['uName'];
		$_SESSION['uEmail'] = $row['uEmail'];
		if($_SESSION['uType'] == 'Admin'){
			header("Location: admin.php");
			exit();
		}

		header("Location: lx.php"); // Redirect to home page
	} else {
		// Login failed, show alert message
		echo "<script>alert('Invalid email or password.')</script>";
		echo "<script>window.location.href='login.php';</script>";
	}
}
?>
