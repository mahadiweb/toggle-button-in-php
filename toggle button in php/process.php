<?php
//print_r($_POST);
$conn = mysqli_connect("localhost","root","","databasename");

if (isset($_POST['aid'])) {
	$id = $_POST['aid'];
	$query1 = mysqli_query($conn,"UPDATE status SET status='$id'");
}

if (isset($_POST['did'])) {
	$id = $_POST['did'];
	$query1 = mysqli_query($conn,"UPDATE status SET status='$id'");
}
?>