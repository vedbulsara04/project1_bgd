<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>

    <script>
      function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
        } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
        }
      }
      function password_show_hid(){
        var y = document.getElementById("confirm_password");
        var sho_eye = document.getElementById("sho_eye");
        var hid_eye = document.getElementById("hid_eye");
        hid_eye.classList.remove("d-none");
        if (y.type === "password") {
          y.type = "text";
          sho_eye.style.display = "none";
          hid_eye.style.display = "block";
        } else {
          y.type = "password";
          sho_eye.style.display = "block";
          hid_eye.style.display = "none";
        }
      }
      function matchPassword() {  
        var password = document.querySelector("#password");
        var confirm_Password = document.querySelector("#confirm_password");
        if (password.value != confirm_Password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        }
        else {
          confirm_password.setCustomValidity('');
        }
      }  
    </script>
  </head>
  <body>
    <div class="text-center">
      <form action="insert_register.php" method="POST" style="max-width:480px;margin:auto;">
        <img class="mt-5 mb-4" src="logo.jpeg" alt="bgd_logo" height="76">
        <h5 class="mb-5">Register your account</h5>
        <input type="text" name="username" id="username" class="form-control mb-3" placeholder=" Enter Name" required>
        <input type="email" name="email" id="emailAddress" class="form-control mb-3" placeholder="Enter Email" required>
        <input type="tel" name="pnumber" id="phone" class="form-control mb-3" placeholder="Enter Phone No" pattern="[0-9]{10}" required>
        <div class="input-group mb-3">
          <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Enter Password" required="true" aria-label="password" aria-describedby="basic-addon1" required />
          <div class="input-group-append">
            <span class="input-group-text" onclick="password_show_hide();">
              <i class="bi bi-eye" id="show_eye"></i>
              <i class="bi bi-eye-slash d-none" id="hide_eye"></i>
            </span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="Cpassword" type="password" value="" class="input form-control" id="confirm_password" placeholder="Confirm Password" aria-label="password" aria-describedby="basic-addon1" required />
          <div class="input-group-append">
            <span class="input-group-text" onclick="password_show_hid();">
              <i class="bi bi-eye" id="sho_eye"></i>
              <i class="bi bi-eye-slash d-none" id="hid_eye"></i>
            </span>
          </div>
        </div>
        <div class="d-grid mt-4">
          <a href="login.php" style="color: crimson;">Already Registered/Login</a>
          <input type="submit" name="register" value="Register" class="btn btn-primary btn-block" onClick="matchPassword();">
        </div>
      </form>
    </div>
  </body>
  </html>
          