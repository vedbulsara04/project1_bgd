<?php include 'header.php'; ?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Employee Info</title>
    </head>
    <body style="background-color:lightgrey;">
        <div class="col p-3 px-3 bg-light my-2 mx-1 rounded">
            <div class="container mt-4">
                <h2>Employee Info</h2>
                <button onclick="location.href='preregister_emp.php'" type="button" class="btn btn-primary btn-block border">Add employee details</button> 
                <table class="mt-4 table table-hover">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Employee Id</th>
                        <th>Department Id</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
include 'connect_db.php';

if(isset($_POST['status'])){
    $stat=$_POST['status'];
    $sql="INSERT INTO `employee`(`status`)VALUES('$stat')";
    if(mysqli_query($conn,$sql)){
        echo "INSERTED";
    }
    else{
        echo "Not INSERTED";
    }
}

$records = mysqli_query($conn,"SELECT * FROM employee");
while($data = mysqli_fetch_array($records)){
?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['f_name'];?></td>
        <td><?php echo $data['l_name'];?></td>
        <td><?php echo $data['age'];?></td>
        <td><?php echo $data['address'];?></td>
        <td><?php echo $data['role'];?></td>
        <td><?php echo $data['emp_id'];?></td>
        <td><?php echo $data['dept_id'];?></td>
        <td><?php echo $data['status'];?></td>
        <td><?php echo $data['created_at'];?></td>
        <td><?php echo $data['updated_at'];?></td>
        
        <td>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Actions
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="edit_empl.php?id=<?php echo $data['id'];?>">Edit</a></li>
                  <li><a class="dropdown-item" href="delete_empl.php?id=<?php echo $data['id'];?>">Delete</a></li>                                  
                </ul>
              </div>
        </td>  
    </tr>
<?php
}
?>
                </span>
            </table>
        </div>
    </div>
</body>
</html>
