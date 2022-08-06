<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Departments Info</title>
    </head>
    <body style="background-color:lightgrey;">
      
        <div class="col p-3 px-3 bg-light my-2 mx-1 rounded">
          <div class="container mt-4">
            <h2>Departments Info</h2>
            <form>
            <button onclick="location.href='pregister_dept.php'" type="button" class="btn btn-primary btn-block border">Add department details</button>
            <table class="mt-4 table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Department id</th>
                        <th>Department name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Created at</th>
                        <th>Upated at</th>
                        <th>Action</th>
                    </tr>
                </thead>
<?php
include 'connect_db.php';

$records = mysqli_query($conn,"SELECT * FROM department");
while($data = mysqli_fetch_array($records)){
?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['dept_id'];?></td>
        <td><?php echo $data['dept_name'];?></td>
        <td><?php echo $data['description'];?></td>
        <td><?php echo $data['status'];?></td>
        <td><?php echo $data['created_by'];?></td>
        <td><?php echo $data['created_at'];?></td>
        <td><?php echo $data['updated_at'];?></td>
        <td><a href="edit_department.php?id=<?php echo $data['id'];?>"><button>Edit</button></a></td>
        <td><a href="delete_department.php?id=<?php echo $data['id'];?>"><button>Delete</button></a></td>  
    </tr>
<?php
}
?> 

</span>
</table>
</form>
</div>
</div>
</body>
</html>