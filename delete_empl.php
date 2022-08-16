<?php
include 'connect_db.php';

  $id = $_GET['id'];
  $del = mysqli_query($conn,"DELETE FROM employee where id='$id'");

  if($del){
    mysqli_close($conn);
    header("location:add_emps.php");
    exit;
  }
  else{
    echo "Error deleting record";
  }
?>