<?php
include 'connect_db.php';

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$role = $_POST['role'];
	$e_id = $_POST['e_id'];
	$d_id = $_POST['d_id'];
}
$sql = mysqli_query($conn,"INSERT INTO employee(f_name, l_name, age, address, role, emp_id, dept_id) VALUES ('$fname', '$lname', '$age', '$address', '$role', '$e_id', '$d_id')");
if($sql==True){
	echo "Data Inserted";
}
else{
	echo "Insertion Error";
}


?>