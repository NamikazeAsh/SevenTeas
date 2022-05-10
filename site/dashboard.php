<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Seven Tea</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Saira&display=swap" rel="stylesheet">

</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebooks";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
echo "\nConnected successfully";

$sql = "select * from curuser";
$result = $conn -> query($sql);

if($result -> num_rows == 0){
    header("Location: http://localhost/login.php");
}

else if($result -> num_rows >0){

    if(isset($_POST['submit'])){

        $sql = "delete from curuser";
        if ($conn->query($sql) === TRUE) {
            $msg = "Logged out!";
            echo "<script> alert('$msg') </script>";
            header("Location: http://localhost/showcase.html");
        } 
        else {
            $msg = "Unsuccessful Log Out!";
            echo "<script> alert('$msg') </script>";
            
        }
        
    }

}   

?>

<style>

    *{
        margin:0;
        padding: 0;
        font-family: 'Luxurious Roman', cursive;
    }

    body{
        background: url(./dashboardbg.png);
    }

    .paymentpane{
        position: absolute;
        width: 642px;
        height: 734px;
        left: 663px;
        top: 199px;

        background: rgba(100, 69, 69, 0.91);
        box-shadow: 0px 15px 8px rgba(0, 0, 0, 0.4);
        border-radius: 100px;
    }

    .backbtn{
        position: absolute;
        width: 45px;
        height: 45px;
        left: 63px;
        top: 646px;
        transition: 0.7s;

        background: #C4C4C4;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
        text-align: center;
    }

    .backbtn:hover{
        background-color: #928484;
    }

    .dashboardimg{
        position: absolute;
        width: 400px;
        height: 400px;
        left: 121px;
        top: -33px;

        background: url(./dashboardimg.png);
    }

    .title{
        position: absolute;
        width: 400px;
        height: 51px;
        left: 160px;
        top: 341px;

        font-family: 'Lora';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 51px;

        color: #FFFFFF;
    }

    .name{
        position: absolute;
        width: 148px;
        height: 49px;
        left: 248px;
        top: 422px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 49px;

        color: #FFFFFF;
    }

    .booksread{
        position: absolute;
        width: 281px;
        height: 49px;
        left: 190px;
        top: 480px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 200;
        font-size: 40px;
        line-height: 49px;

        color: #FFFFFF;
    }

    .memstat{
        position: absolute;
        width: 373px;
        height: 49px;
        left: 144px;
        top: 544px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 49px;

        color: #FFFFFF;
    }

    .proceedbtn{
        position: absolute;
        width: 229px;
        height: 48px;
        left: 209px;
        top: 643px;

        transition: 0.7s;

        background: #C4C4C4;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
    }   

    .proceedbtn:hover{
        background-color: #928484;
    }

</style>

<body>

    <?php

    $curuserq = "select * from curuser";
    $curuserr = $conn -> query($curuserq);

    if($curuserr -> num_rows>0){
        $row = $curuserr -> fetch_assoc();
    }

    $tempuname = $row["username"];
    $signupq = "select * from sign_up where username ='" .$tempuname. "'";
    $signupr = $conn -> query($signupq);

    if($signupr -> num_rows>0){
        $row2 = $signupr -> fetch_assoc();
    }

    ?>

    <div class="paymentpane">

        <div class="backbtn">
            <button type="button" id="backbtn" style="background-color: transparent;border: 0px;color: #C14F4F;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 30px;width: 28px;height: 59px;left: 87px;top: 700px;text-align: center;align-items: center;" onclick="javascript:location='./browse.php'"><</button>
        </div>

        <div class="dashboardimg"></div>

        <div class="title">
            <?php
            if($row2["booksread"] <= 10){
                echo "Beginner Reader";
            }
            else if($row2["booksread"] > 10 && $row2["booksread"] <= 15){
                echo "Intermediate Reader";
            }
            else if($row2["booksread"] > 15){
                echo "Voracious Reader";
            }
            ?>
        </div>

        <div class="name">
            <?php
            echo $row["username"];
            ?>
        </div>

        <div class="booksread">
            <?php
            echo $row2["booksread"] . " books read";
            ?>
        </div>

        <div class="memstat">
            <!-- Premium Member -->
            <?php
            if($row2["membership"] == "yes"){
                echo "Premium Member";
            }
            else{
                echo "Classic Member";
            }
            ?>
        </div>
        



        <form id="logout" class ="logout" method="post">

        <div class="proceedbtn">
            <button type="submit" name="submit" id="proceedbtn" style="width: 229px;height: 48px;left: 209px;top: 643px;background: transparent;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;border: 0px;font-family: 'Saira';font-style: normal;font-weight: 400;font-size: 24px;line-height: 38px;color: #C14F4F;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" required onclick="logoutfun()">Log Out</button>
        </div>

        </form>


    </div>



</body>




</html>