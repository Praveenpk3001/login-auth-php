<?php

require "constants.php";

try {
  $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("INSERT INTO users (name,age,gender,phone,email, password)
                          VALUES ( :name ,:age,:gender,:phone,:email, :password)");
  
  $stmt->bindParam(':name' , $name);
  $stmt->bindParam(':email' , $email);
  $stmt->bindParam(':password' ,$password);
  $stmt->bindParam(':age' ,$age);
  $stmt->bindParam(':gender' ,$gender);
  $stmt->bindParam(':phone' ,$phone);

  
  if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $pw=$_POST["password"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $password=password_hash($pw,PASSWORD_DEFAULT );

    $stmt->execute();

    echo "Signup successful!";
}  

} catch(PDOException $e) {
	 echo "Error: " . $e->getMessage();
}
$conn = null;
?>