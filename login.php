<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Optional: Add basic sanitization
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Save to database
$sql = "INSERT INTO logins (email, password) VALUES ('$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "<h2>✅ Thanks! Your login was recorded for demo purposes.</h2>";
} else {
  echo "❌ Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>  