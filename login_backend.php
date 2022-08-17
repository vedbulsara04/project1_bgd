<?php
session_start();
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "team_project1";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

$name = $_POST['username'];
$username = $_POST['email'];
$pword = $_POST['password'];

$sql = "SELECT * FROM register WHERE email = '$username' and password = '$pword' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    header("Location: http://localhost/Team_Project/doheader.php"); 
	exit();
  }
} else {
  echo "User Not Found";
}

// $query = mysqli_query($conn,"SELECT * FROM register WHERE email = '$username' and password = '$pword' ");
// if(mysqli_num_rows($query)>0)
// {
// 	echo var_dump($query);
// 	// echo $username;
// 	if(isset($_SESSION)){
// 		$email=$_SESSION['email'];
// 		// $password=$_SESSION['password'];
// 		echo "Hello, " .  $name . "";

// 		echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
// 	}
// 	echo "Login Successful";
// }
// else
// {
// 	if($_POST['email']==$username && $_POST['password']==$pword){
// 		$_SESSION['email']=$username;
// 	}
// 	echo "User Not Found";
// }
?>
