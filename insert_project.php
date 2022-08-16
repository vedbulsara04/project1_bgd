<?php
$servername = "localhost";
$username = "root";
$p = "";
$database = "team_project1";

// Create connection
$connect = new mysqli($servername, $username, $p, $database);

if(isset($_POST['add'])){
	$pname = $_POST['project_name'];
	$desc = $_POST['description'];
	$sd = $_POST['start_date'];
	$td = $_POST['timeline_days'];
	$status = $_POST['status'];
	$deptid = $_POST['dept_id'];
	$empid = $_POST['emp_id'];
	$created = $_POST['created_by'];
	
}
$sql = mysqli_query($connect,"INSERT INTO project_registration (project_name,description,start_date,timeline_days,status,dept_id,emp_id,created_by	) VALUES ('$pname','$desc','$sd','$td','$status','$deptid','$empid','$created')");
if($sql==True){
	echo "Data Inserted";
}	
else{
	echo "Insertion Error";
}
?>
