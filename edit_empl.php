<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Employee</title>
  </head>
  <body>
    <?php
    include 'connect_db.php';
    $id = $_GET['id'];
    $select="SELECT * FROM employee WHERE id='$id' ";
    $data=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($data);
?>
    <div class="text-center">
      <form style="max-width:480px;margin:auto;" action="" method="POST">
        <img class="mt-5 mb-4" src="logo.jpeg" alt="bgd_logo" height="76">
        <h5 class="mb-5">Edit Employee Info</h5>
        <input value="<?php echo $row['id']?>" type="text" class="form-control mb-3" name="id" placeholder="id" required>
        <input value="<?php echo $row['f_name']?>" type="text" class="form-control mb-3" name="f_name"
        placeholder="name" required>
        <input value="<?php echo $row['l_name']?>" type="text" class="form-control mb-3" name="l_name"
        placeholder="name" required>
        <input value="<?php echo $row['age']?>" type="text" class="form-control mb-3" name="age"
        placeholder="age" required>

        <input value="<?php echo $row['address']?>" type="text" class="form-control mb-3" name="address"
        placeholder="address" required>

        <input value="<?php echo $row['role']?>" class="form-control mb-3" type="text" name="role"
        placeholder="role" required>

        <input value="<?php echo $row['emp_id']?>" class="form-control mb-3" type="text" name="emp_id"
        placeholder="empl" required>

        <input value="<?php echo $row['dept_id']?>" class="form-control mb-3" type="text" name="dept_id"
        placeholder="dept" required>
        <div class="d-grid mt-4">

        <td>
            <div class="dropdown">
                <select name='status' id='status'>
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                  Status
                   <ul class="dropdown-menu">
                  <option><a class="dropdown-item" >Employee</a></option>
                  <option><a class="dropdown-item" >In Probation</a></option>
                  <option><a class="dropdown-item" >Left</a></li></option>
                  <option><a class="dropdown-item" >Deleted</a></li></option>                              
                </ul>
                </select>
                </button>
              </div>
        </td>  
          <input type="submit" class="btn btn-primary btn-block" name="Update_btn" value="Update">
          <a href="add_emps.php"><button class="btn btn-primary btn-block border">Back</button></a>
        </div>
      </form> 
    </div>
   <?php
    if (isset($_POST['Update_btn'])){
        $id = $_POST['id'];
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        $eid = $_POST['emp_id'];
        $did = $_POST['dept_id'];
        $stat=$_POST['status'];

        $update = "UPDATE employee SET id='$id',f_name='$fname',l_name='$lname',age='$age',address='address',role='$role', emp_id='$eid',status='$stat', dept_id='$did' WHERE id='$id'";
        $data=mysqli_query($conn,$update);
        if($data){
            echo "Updated Successfully";
        }
    }
?>
  </body>
  </html>
