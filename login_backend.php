<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "project1";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

$username = $_POST['email'];
$pword = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM user_login WHERE email = '$username' and password = '$pword' ");
if(mysqli_num_rows($query)>0)
{
	echo "Login Successful";
}
else
{
	echo "User Not Found";
}
?>
