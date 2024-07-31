<?php
include("connection.php");

if (isset($_POST['submit'])) {
  $username = $_POST['user'];
  $password = $_POST['pass'];

  // Validate username and password (optional)

  // Login verification query
  $sql = "SELECT * FROM credentials WHERE uname='$username' AND pass='$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    // Login successful, set session variables
    session_start(); // Start the session (if not already started)
    $_SESSION['username'] = $username; // Store username in session

    // Additional session variables (optional)
    // You can store other user information like name, email, etc. in session variables

    header("Location: welcome.php");
    exit; // Exit script after successful login
  } else {
    echo '<script>
        window.location.href="index.php";
        alert("Login failed. Invalid username or password");
        </script>';
  }
}
?>
