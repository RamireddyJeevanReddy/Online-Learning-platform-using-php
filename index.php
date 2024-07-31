<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="i.css">
    <title>Document</title>
</head>

<body>
    <div id="cont">
        <div id="box"><img src="logo1.png" alt=""></div>
        <div id="form">
            <img id="im" src="logo2.png">
            <h1>Login</h1>
            <form name="form" action="login.php" method="POST">
                <label> Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password</label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name="submit" />
                <br>
                <br>
                <a href="register.php">New to Intelimentor? register.</a>
            </form>
        </div>
    </div>

</body>

</html>