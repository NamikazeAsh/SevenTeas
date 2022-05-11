<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request | Seven Tea's eBook System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Nunito+Sans:wght@300&family=Saira&display=swap" rel="stylesheet">

</head>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebooks";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if(isset($_POST['submit'])){
        unset($reqbooke);
        $reqbooke = $_POST['recbook'];
        $sql = "insert into request(reqbook) values('$reqbooke')";
        
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Request sent to administrators , will be considered.')</script>";
            unset($reqbooke);
        }
        else{
            echo "Not done";
        }

    }

    ?>


<style>
    
    body{
        height: 900px;
        background: linear-gradient(90deg, #582525 33.59%, #A77B7B 105.57%);
    }

    .line{
        position: absolute;
        width: 1080px;
        height: 0px;
        left: 97px;
        top: 409px;

        border: 1px solid #000000;
        transform: rotate(90deg);
    }

    .reqside{
        position: absolute;
        width: 637px;
        height: 950px;
        left: 0px;
        top: 0px;

        background: url(./requestside.png);
    }

    .reqtext{
        position: absolute;
        width: 654px;
        height: 204px;
        left: 1020px;
        top:0px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 128px;
        line-height: 156px;

        color: #FFFFFF;
    }

    .reqimg{
        position: absolute;
        width: 597px;
        height: 597px;
        left: 973px;
        top: 145px;

        background: url(./requestimg.png)
    }

    .lrecbook{
        position: absolute;
        width: 375px;
        height: 44px;
        left: 740px;
        top: 777px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 36px;
        line-height: 44px;

        color: #FFFFFF;
    }

    .recbtn{
        position: absolute;
        width: 294px;
        height: 65px;
        left: 1117px;
        top:870px;
        transition: 0.7s;

        background: #AA5858;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
    }

    .recbtn:hover{
        background-color: brown;
    }

    .backbtn{
        position: absolute;
        width: 45px;
        height: 45px;
        left: 1045px;
        top: 882px;
        transition: 0.7s;

        background: #C4C4C4;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
        text-align: center;
    }

    .backbtn:hover{
        background-color: #928484;
    }
    
</style>

<body>

    <div class="line"></div>

    <div class="reqside"></div>

    <div class="reqtext">Request</div>

    <div class="reqimg"></div>
    <button>sss</button>

    <form method="POST" name="recbookform" id="recbookform" class="recbookform">
        <div class="recbook">
                <input type="text" name="recbook" id="recbook" placeholder="Recommend a book" style="position: absolute;width: 600px;height: 38px;left: 1200px; top: 780px;background: #C4C4C4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 24px;line-height: 29px;color:crimson;text-align: center;border: 0px;" required>
        </div>

        <div class="lrecbook">Book to recommend</div>
        
        <div class="recbtn">
            <button type="submit" name="submit" id="recbuttonb" class="recbutton" style="position: absolute;width: 294px;height: 65px;left: 0px;top: 0px;background:transparent;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;border:transparent;border-width: 0px;color: white;font-weight: 400;font-family: Montserrat;font-size: 32px;">Recommend</button>
        </div>
    </form>

    <div class="backbtn">
            <button type="button" id="backbtn" style="background-color: transparent;border: 0px;color: #C14F4F;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 30px;width: 28px;height: 59px;left: 87px;top: 700px;text-align: center;align-items: center;" onclick="javascript:location='http://localhost/browse.php'"><</button>
</div>

</body>





</html>