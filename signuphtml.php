<?php require "signup.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    .container {
      max-width: 400px;
      margin-top: 50px;
     
    }
    .btn-block {
      margin-top: 20px;
    }
    .form-group label {
      font-weight: bold;
    }
    .mt-5 {
      margin-top: 3rem !important;
    }
    .mb-3 {
      margin-bottom: 1.5rem !important;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <h2 class="text-center mt-5 mb-3">Signup</h2>
        <form method="POST">

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" pattern="[A-Za-z\s]+" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="age">age</label>
            <input type="text" class="form-control" name="age" placeholder="Enter your age" required>
          </div>
          <div class="form-group">
            <label for="gender">gender</label>
            <input type="text" class="form-control" name="gender" placeholder="Enter your gender" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" pattern="[7896][0-9]{9}" placeholder="Enter your phonenumber" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="form-group">
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Signup</button>
          <a href="login.php">Already Have an Account</a>
        </form>
      </div>
    </div>
  </div>
  <script>
  var password = document.getElementById('password');
  var confirm_password = document.getElementById('confirmpassword');

  function validatePassword() {
    if (password.value !== confirm_password.value) {
      confirm_password.setCustomValidity('Passwords do not match');
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.addEventListener('change', validatePassword);
  confirm_password.addEventListener('keyup', validatePassword);
</script>

</body>
</html>
