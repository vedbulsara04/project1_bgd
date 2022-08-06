<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Projects Info</title>
    </head>
    <body style="background-color:lightgrey;">
        <?php include 'doheader.php ' ?>
        <div class="col p-3 px-3 bg-light my-2 mx-1 rounded">
            <div class="container mt-4">
                <h2>Project Info</h2>
                <button onclick="location.href='pregister.php'" type="button" class="btn btn-secondary btn-block border">Add Project</button> 
                <table class="mt-4 table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Project Name</th>
                            <th>Description</th>
                            <th>Start From</th>
                            <th>Timeline Days</th>
                            <th>Status</th>
                            <th>Department</th>
                            <th>Employee Assigned</th>
                            <th>Created By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
<?php
    include 'connect_db.php';

    $records = mysqli_query($conn,"SELECT * FROM project_registration");
    while($data = mysqli_fetch_array($records)){
?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['project_name'];?></td>
        <td><?php echo $data['description'];?></td>
        <td><?php echo $data['start_date'];?></td>
        <td><?php echo $data['timeline_days'];?></td>
        <td><?php echo $data['status'];?></td>
        <td><?php echo $data['dept_id'];?></td>
        <td><?php echo $data['emp_id'];?></td>
        <td><?php echo $data['created_by'];?></td>
        <td><?php echo $data['created_at'];?></td>
        <td><?php echo $data['updated_at'];?></td>
        <td><a href="edit_project.php?id=<?php echo $data['id'];?>"><button>Edit</button></a><a href="delete_project.php?id=<?php echo $data['id'];?>"><button>Delete</button></a></td>
        
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