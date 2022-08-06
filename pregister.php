<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Project</title>
  </head>
  <body>
    <div class="text-center">
      <form action="insert_project.php" method="POST" style="max-width:480px;margin:auto;">
        <img class="mt-5 mb-4" src="logo.jpeg" alt="bgd_logo" height="76">
        <h5 class="mb-5">Add New Project</h5>
        <input type="text" name="project_name" id="pname" class="form-control mb-3" placeholder=" Enter Project Name" required>
        <input type="text" name="description" id="desc" class="form-control mb-3" placeholder=" Enter Project Description" required>
        <input type="text" name="start_date" id="strfr" class="form-control mb-3" placeholder=" Project Starts From" required>
        <input type="text" name="timeline_days" id="tid" class="form-control mb-3" placeholder=" Timeline" required>
        <input type="text" name="status" id="stat" class="form-control mb-3" placeholder=" Status" required>
        <input type="text" name="dept_id" id="dept" class="form-control mb-3" placeholder=" Department Id" required>
        <input type="text" name="emp_id" id="empl" class="form-control mb-3" placeholder=" Employee Id" required>
        <input type="text" name="created_by" id="crtd" class="form-control mb-3" placeholder=" Created By" required>
        <div class="d-grid mt-4">
          <input type="submit" name="add"  value="Add" class="btn btn-primary btn-block">
        </div>
      </form>
    </div>
  </body>
  </html>
