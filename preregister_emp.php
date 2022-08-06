<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Employee details</title>
  </head>
  <form action = "employee_backend.php" method = "POST">
  <body>
    
    <div class="text-center">
      <img class="mt-2 mb-2" src="bgd.jpeg" alt="bgd_logo" height="76">
      <form style="max-width:480px;margin:auto;">
        
        <h5 class="mb-4">Employee details</h5>
        <input type="text" name="fname" id="pname" class="form-control mb-3" placeholder="First name" required>
        <input type="text" name="lname" id="pname" class="form-control mb-3" placeholder="Last name" required>
        <input type="text" name="age" id="pname" class="form-control mb-3" placeholder="Age" required>
        <input type="text" name="address" id="pname" class="form-control mb-3" placeholder="Address" required>
        <input type="text" name="role" id="pname" class="form-control mb-3" placeholder="Role" required>
        <input type="text" name="e_id" id="pname" class="form-control mb-3" placeholder="Employee id" required>
        <input type="text" name="d_id" id="pname" class="form-control mb-3" placeholder="Department id" required>
        
          
        <div class="d-grid mt-4">
            <input type="submit" name="submit" value="Add" class="btn btn-primary btn-block">
         </div>
        </div>
      </form>
    </div>
  </form>
  </body>
  </html>
