<?php
include 'connect_db.php';

if(isset($_POST['submit'])){
	$d_id = $_POST['dept_id'];
	$d_name = $_POST['dept_name'];
	$desc = $_POST['description'];
	$status = $_POST['status'];
	$cby = $_POST['created_by'];
}
$sql = mysqli_query($conn,"INSERT INTO department(dept_id,dept_name,description,status,created_by) VALUES ('$d_id','$d_name','$desc','$status','$cby')");
if($sql==True){
	echo "Data Inserted";
}
else{
	echo "Insertion Error";
}


?>