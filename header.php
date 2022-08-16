<?php 
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-black">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="logo.jpeg" alt="bgd_logo" height="76" class="d-inline-block align-middle mr-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="#" class="nav-link active">Hello, <?php echo $_SESSION['username']; ?></a></li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="project.php"><i class="bi bi-file-ppt"></i> Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="add_dept1.php"><i class="bi bi-box"></i> Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="add_emps.php"><i class="bi bi-person"></i> Employee</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>