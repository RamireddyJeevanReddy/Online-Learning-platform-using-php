<?php
include("connection.php");

// Display form to enter username
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="h.css">
    <title>Document</title>
</head>

<body>

    <nav>
        <img id="l" src="logo2.png" alt="">
        <ul id="bar">
            <li><a href="welcome.php" style="color: aliceblue;">Home</a></li>
            <li><a href="regertered.php" style="color: aliceblue;">RgisteredCourses</a></li>
        </ul>
    </nav>
    <h2>View Registered Courses</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <button type="submit">View Courses</button>
    </form>
    
</body>


    

<?php

// Check if the form is submitted
if (isset($_POST['username'])) {
  $username = $_POST['username'];

  // Validate username (optional)

  // Create SQL statement
  $sql = "SELECT cname FROM registered WHERE uname = '$username'";

  // Execute the query
  $result = mysqli_query($conn, $sql);

  // Check for successful execution
  if ($result) {

    // Check if any courses are found
    if (mysqli_num_rows($result) > 0) {
      echo "<h3>Courses for " . $username . "</h3>";
      echo "<ul>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row['cname'] . "</li>";
      }
      echo "</ul>";
    } else {
      echo "No registered courses found for user: " . $username;
    }
  } else {
    echo "Error retrieving registered courses: " . mysqli_error($conn);
  }
}

?>


