
<?php
include("connection.php");
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
            <li><a href="fetch.php" style="color: aliceblue;">RgisteredCourses</a></li>
        </ul>
    </nav>
    <div id="wel">
        <img id="l1" src="logo4.png" alt="">

    </div>
    <h2 style="text-align: center;">Availble Courses</h2>
    <div id="cat" style="text-align: center;">

        <div class="box">
            <img class="l3" src="daa.png" alt="">
            <p><b>Courese Name :</b>Desgin Analysis Of Algorithm</p>
            <p><b>Faculty :</b>L.Jegannathan</p>
            <div id="can" style="padding: 100px;"></div>
        </div>
        <div class="box">
            <img class="l3" src="iwp.jpeg" alt="">
            <p><b>Courese Name :</b>Internet And Web Programming</p>
            <p><b>Faculty :</b>U.Vignesh</p>
            <div id="can1" style="padding: 100px;"></div>
        </div>
        <div class="box">
            <img class="l3" src="iwp.jpeg" alt="">
            <p><b>Courese Name :</b>Internet And Web Programming</p>
            <p><b>Faculty :</b>U.Vignesh</p>
        </div>
        <div class="box">
            <img class="l3" src="iwp.jpeg" alt="">
            <p><b>Courese Name :</b>Internet And Web Programming</p>
            <p><b>Faculty :</b>U.Vignesh</p>
        </div>



    </div>
    <div style="align-items: center; text-align: center;padding-bottom: 5%;">

        
        <form action="rc.php" method="POST" name="form" style="background-color: rgb(148, 200, 222);margin-left: 10%;margin-right: 10%;padding: 20px;border-radius: 25%;">
            <h3>Register Here</h3>
            <h3>Uname</h3>
            <input type="text" id="un" name="un"><br>
            <h3>Courese Name</h3>
            <input type="text" name="cname" id="cname"><br>
            <h3>Duration</h3>
            <input type="number" name="days" id="days"><br>
            <input type="submit" name="submit" id="btn" value="submit">
        </form>
    </div>
    
</body>

</html>