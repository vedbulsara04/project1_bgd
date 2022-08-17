
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <title>Login</title>

    <script>

    </script>
  </head>

  <body>
    <div class="text-center">

      <form action= "login_backend.php" method="POST" style="max-width:480px;margin:auto;">
        <img class="mt-5 mb-4" src="logo.jpeg" alt="bgd_logo" height="76">
        <h5 class="mb-5">Login to your account</h5>

        <input type="text" id="emailAddress" name="username" class="form-control mb-3" placeholder="Enter Name" required>
        <input type="email" id="emailAddress" name="email" class="form-control mb-3" placeholder="Enter email" required>
        <div class="input-group" id="show_hide_password">
            <input type="password" id="psswd" name="password" class="form-control" placeholder="Enter password" required>
            <div class="input-group-addon">
              <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="d-grid mt-4"> <a href = "doheader.php">
          <button class="btn btn-primary btn-block" name="login">Login</button>
        </a>  
        </div>
      </form>

    </div>




    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
  </body>
</html>
