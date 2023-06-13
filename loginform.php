<?php require "login.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
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
        <h2 class="text-center mt-5 mb-3">Login</h2>
        <form method="POST">
          <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <a href="signuphtml.php">sign up</a>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
