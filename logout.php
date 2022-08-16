<?php
	session_start();

	if(isset($_SESSION['email'])){

		session_destroy();

		echo "<a href = 'login.php'>";
	}
	else{
		echo "<a href = 'login.php'>";
		
	}
?>