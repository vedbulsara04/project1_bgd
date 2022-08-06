<?php
	include 'connect_db.php';
	$id = $_GET['id'];
	$select="SELECT * FROM project_registration WHERE id='$id' ";
	$data=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($data);
?>
<div>
	<form action="" method="POST">
		<input value="<?php echo $row['id']?>"type="text" name="id"
		placeholder="id"><br><br>

		<input value="<?php echo $row['project_name']?>" type="text" name="project_name"
		placeholder="project_name"><br><br>

		<input value="<?php echo $row['description']?>" type="text" name="description"
		placeholder="description"><br><br>

		<input value="<?php echo $row['start_date']?>" type="date" name="start_date"
		placeholder="start_date"><br><br>

		<input value="<?php echo $row['timeline_days']?>" type="text" name="timeline_days"
		placeholder="timeline_days"><br><br>

		<input value="<?php echo $row['status']?>" type="text" name="status"
		placeholder="status"><br><br>

		<input value="<?php echo $row['dept_id']?>" type="text" name="dept_id"
		placeholder="dept_id"><br><br>

		<input value="<?php echo $row['emp_id']?>" type="text" name="emp_id"
		placeholder="emp_id"><br><br>

		<input value="<?php echo $row['created_by']?>" type="text" name="created_by"
		placeholder="created_by"><br><br>

		<input type="submit" name="Update_btn" value="Update">
		<button><a href="project.php">Back</a></button>

		

	</form>
</div>
<?php
	if (isset($_POST['Update_btn'])){
		$id = $_POST['id'];
		$pname = $_POST['project_name'];
		$desc = $_POST['description'];
		$sd = $_POST['start_date'];
		$td = $_POST['timeline_days'];
		$stat = $_POST['status'];
		$did = $_POST['dept_id'];
		$eid = $_POST['emp_id'];
		$cby = $_POST['created_by'];

		$update = "UPDATE project_registration SET project_name='$pname',description='$desc',start_date='$sd',timeline_days='$td',status='$stat',dept_id='$did',emp_id='$eid',created_by='$cby' WHERE id='$id'";
		$data=mysqli_query($conn,$update);
		if($data){
			echo "Updated Successfully";
		}
	}
?>