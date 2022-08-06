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
$sql = mysqli_query($connect,"INSERT INTO register(username,email,pnumber,password) VALUES ('$uname','$email','$phonenumber','$psword') ");
	if($sql==True){
		echo " ";
	}
	else{
		echo "Insertion Error";
	}
$query = mysqli_query($connect,"SELECT * FROM user_login WHERE email = '$email' and password = '$psword' ");
	if(mysqli_num_rows($query)>0)
	{
		echo "Login Successful";
	}
else{
	$sql1 = mysqli_query($connect, "INSERT INTO user_login (email,password) VALUES ('$email','$psword') ");
		if($sql1==True){
			echo "Data Inserted";
		}
		else{
			echo "Error";
		}
	} 




?>
