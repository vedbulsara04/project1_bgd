<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Department details</title>
  </head>
  <body>
    <form action = "department_backend.php" method = "POST">
    
    <div class="text-center">
      <img class="mt-5 mb-4" src="bgd.jpeg" alt="bgd_logo" height="76">
      <form style="max-width:480px;margin:auto;">
        
        <h5 class="mb-5">Department details</h5>
        <input type="text" id="pname" name="dept_id" class="form-control mb-3" placeholder=" Enter department id" required>
        <input type="text" id="desc" name="dept_name" class="form-control mb-3" placeholder=" Enter department name" required>
        <input type="text" id="strfr" name="description" class="form-control mb-3" placeholder="Enter department description" required>
        <input type="text" id="tid" name="status" class="form-control mb-3" placeholder="Status (Active/Inactive)" required>
        <input type="text" id="cby" name="created_by" class="form-control mb-3" placeholder="Created By" required>
        <div class="d-grid mt-4">
          <input type="submit" name="submit" value="Add" class="btn btn-primary btn-block">
        </div>
      </form>
    </div>
  </form>
  </body>
  </html>
