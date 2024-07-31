<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $name=$_POST['name'];
    $number=$_POST['num'];
}
$sql="insert into credentials values('$password','$name','$number','$username')";
mysqli_query($conn,$sql);


    echo '<script>
        window.location.href="index.php";
        alert("Registration Sucessful");
        </script>';

?>
