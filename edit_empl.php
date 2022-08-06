<?php
    include 'connect_db.php';
    $id = $_GET['id'];
    $select="SELECT * FROM employee WHERE id='$id' ";
    $data=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($data);
?>
<div>
    <form action="" method="POST">

        <input value="<?php echo $row['id']?>"type="text" name="id"
        placeholder="id"><br><br>

        <input value="<?php echo $row['f_name']?>"type="text" name="f_name"
        placeholder="name"><br><br>

        <input value="<?php echo $row['l_name']?>" type="text" name="l_name"
        placeholder="name"><br><br>

        <input value="<?php echo $row['age']?>" type="text" name="age"
        placeholder="age"><br><br>

        <input value="<?php echo $row['address']?>" type="text" name="address"
        placeholder="address"><br><br>

        <input value="<?php echo $row['role']?>" type="text" name="role"
        placeholder="role"><br><br>

        <input value="<?php echo $row['emp_id']?>" type="text" name="emp_id"
        placeholder="empl"><br><br>

        <input value="<?php echo $row['dept_id']?>" type="text" name="dept_id"
        placeholder="dept"><br><br>

        <input type="submit" name="Update_btn" value="Update">
        <button><a href="add_emps.php">Back</a></button>

        

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

        $update = "UPDATE employee SET id='$id',f_name='$fname',l_name='$lname',age='$age',address='address',role='$role', emp_id='$eid',dept_id='did' WHERE id='$id'";
        $data=mysqli_query($conn,$update);
        if($data){
            echo "Updated Successfully";
        }
    }
?>