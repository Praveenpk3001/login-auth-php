<?php
require "constants.php";

try {
  $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pw = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $hash_pwt = $result[0]["password"];

    if (password_verify($pw, $hash_pwt)) {
      session_start();
      $_SESSION["name"] = $result[0]["name"];
      $_SESSION["age"] = $result[0]["age"];
      $_SESSION["gender"] = $result[0]["gender"];
      $_SESSION["phone"] = $result[0]["phone"];
      $_SESSION["email"] = $result[0]["email"];
    


      header("location: dashboard");
    } else {
      echo "<script>
      alert('Incorrect password');
      </script>";
    }
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
?>
