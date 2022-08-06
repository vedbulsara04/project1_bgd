<?php
    include 'connect_db.php';
    $id = $_GET['id'];
    $select="SELECT * FROM department WHERE id='$id' ";
    $data=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($data);
?>
<div>
    <form action="" method="POST">
        <input value="<?php echo $row['id']?>"type="text" name="id"
        placeholder="id"><br><br>

        <input value="<?php echo $row['dept_id']?>" type="text" name="dept_id"
        placeholder="dept_id"><br><br>

        <input value="<?php echo $row['dept_name']?>" type="text" name="dept_name"
        placeholder="project_name"><br><br>

        <input value="<?php echo $row['description']?>" type="text" name="description"
        placeholder="description"><br><br>

        <input value="<?php echo $row['status']?>" type="text" name="status"
        placeholder="status"><br><br>

        <input value="<?php echo $row['created_by']?>" type="text" name="created_by"
        placeholder="created_by"><br><br>

        <input type="submit" name="Update_btn" value="Update">
        <button><a href="add_depts.php">Back</a></button>

        

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