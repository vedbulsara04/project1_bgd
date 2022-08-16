<?php
include 'connect_db.php';

	$id = $_GET['id'];
	$del = mysqli_query($conn,"DELETE FROM project_registration where id='$id'");

	if($del){
		mysqli_close($conn);
		header("location:project.php");
		exit;
	}
	else{
		echo "Error deleting record";
	}
?>