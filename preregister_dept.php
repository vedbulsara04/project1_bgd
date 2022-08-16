<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Department deails</title>
  </head>
  <body>
    
    <div class="text-center">
      <img class="mt-5 mb-4" src="logo.jpeg" alt="bgd_logo" height="76">
      <form action="department_backend.php" method="POST" style="max-width:480px;margin:auto;">
        
        <h5 class="mb-5">Department details</h5>
        <input type="text" name="dept_id" id="pname" class="form-control mb-3" placeholder=" Enter department id" required>
        <input type="text" name="dept_name" id="desc" class="form-control mb-3" placeholder=" Enter department name" required>
        <input type="text" name="description" id="strfr" class="form-control mb-3" placeholder="Enter department description" required>
        <input type="text" name="status" id="tid" class="form-control mb-3" placeholder="Status (Active/Inactive)" required>
        <input type="text" name="created_by" id="cby" class="form-control mb-3" placeholder="Created By" required>
        <div class="d-grid mt-4">
          <input type="submit" name="submit"  value="submit" class="btn btn-primary btn-block">
        </div>
      </form>
    </div>
  </body>
  </html>
