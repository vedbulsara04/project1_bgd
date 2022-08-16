<?php
include 'connect_db.php';

if(isset($_POST['submit'])){
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$role = $_POST['role'];
	$e_id = $_POST['emp_id'];
	$d_id = $_POST['dept_id'];
	$stat = $_POST['status'];
}
$sql = mysqli_query($conn,"INSERT INTO employee(f_name, l_name, age, address, role, emp_id, dept_id,status) VALUES ('$fname', '$lname', '$age', '$address', '$role', '$e_id', '$d_id','$stat')");
if($sql==True){
	echo "Data Inserted";
}
else{
	echo "Insertion Error";
}


?>