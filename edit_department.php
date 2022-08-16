<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Department</title>
  </head>
  <body>
    <?php
    include 'connect_db.php';
    $id = $_GET['id'];
    $select="SELECT * FROM department WHERE id='$id' ";
    $data=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($data);
?>
    <div class="text-center">
      <form style="max-width:480px;margin:auto;" action="" method="POST">
        <img class="mt-5 mb-4" src="logo.jpeg" alt="bgd_logo" height="76">
        <h5 class="mb-5">Edit Department</h5>
        <input value="<?php echo $row['id']?>" class="form-control mb-3" type="text" name="id" placeholder="id" required>
        <input value="<?php echo $row['dept_id']?>" class="form-control mb-3" type="text" name="dept_id" placeholder="dept_id" required>
         <input value="<?php echo $row['dept_name']?>" class="form-control mb-3" type="text" name="dept_name" placeholder="project_name" required>
         <input value="<?php echo $row['description']?>" class="form-control mb-3" type="text" name="description" placeholder="description" required>
         <input value="<?php echo $row['status']?>" class="form-control mb-3" type="text" name="status" placeholder="status" required>
         <input value="<?php echo $row['created_by']?>" class="form-control mb-3" type="text" name="created_by" placeholder="created_by" required>
        <div class="d-grid mt-4">
          <input type="submit" class="btn btn-primary btn-block" name="Update_btn" value="Update">
         <a href="add_dept1.php"><button class="btn btn-primary btn-block border">Back</button></a>
        </div>
      </form>
    </div>
    <?php
    if (isset($_POST['Update_btn'])){
        $id = $_POST['id'];
        $did = $_POST['dept_id'];
        $dname = $_POST['dept_name'];
        $desc = $_POST['description'];
        $stat = $_POST['status'];
        $cby = $_POST['created_by'];

        $update = "UPDATE department SET id='$id',dept_id='$did',dept_name='$dname',description='$desc',status='$stat',created_by='$cby' WHERE id='$id'";
        $data=mysqli_query($conn,$update);
        if($data){
            echo "Updated Successfully";
        }
    }
?>
  </body>
  </html>
