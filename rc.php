<?php
include("connection.php");


// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get form data
  $username = $_POST['un'];
  $courseName = $_POST['cname'];
  $days = $_POST['days'];
  echo $username;

  // Validate data (optional, add checks for empty fields, data types, etc.)

  // Create SQL statement
  $sql = "INSERT INTO registered (uname, cname, nd) VALUES ('$username', '$courseName', $days)";

  // Execute the query
  $result = mysqli_query($conn, $sql);

  // Check for successful insertion
  if ($result) {
    echo '<script>
    window.location.href="welcome.php";
    alert("Registration Sucessful");
    </script>';
  } else {
    echo "Error registering course: " . mysqli_error($conn);
  }
} else {
  echo "Access denied."; // Handle unauthorized access
}

// Close the connection (optional, consider using mysqli_close() in connection.php)
// mysqli_close($conn);
?>
