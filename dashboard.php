<?php
session_start();

if (!isset($_SESSION["name"])) {
  header("Location: loginform.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  header("Location: loginform.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Dashboard</title>
</head>
<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">
              
              <h4 class="mb-2">  <?php echo $_SESSION["name"] ;?></h4>
              <p class="text-muted mb-4"><?php echo $_SESSION["age"] ;?>< <span class="mx-2">|</span> 
              <?php echo $_SESSION["gender"] ;?></p>
             <p> <span><?php echo $_SESSION["email"] ;?>   || 
              <?php echo $_SESSION["phone"] ;?></span></p>
              
              <form method="post" action="">
                <button type="submit" class="btn btn-primary btn-rounded btn-lg" name="logout">Logout</button>
              </form>
             
            
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
</body>
</html>
