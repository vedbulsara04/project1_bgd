<?php
$servername = "localhost";
$username = "root";
$p = "";
$database = "team_project1";

// Create connection
$connect = new mysqli($servername, $username, $p, $database);

if(isset($_POST['register'])){
	$uname = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['pnumber'];
	$psword = $_POST['password'];
}
$sql = mysqli_query($connect,"INSERT INTO register(username,email,pnumber,password) VALUES ('$uname','$email','$phonenumber','$psword')");
if($sql==True){
	echo "Data Inserted ";
}
else{
	echo "Insertion Error";
}
?>