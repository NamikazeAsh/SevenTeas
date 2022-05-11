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

<style>

    *{
        margin:0;
        padding: 0;
        font-family: 'Luxurious Roman', cursive;
    }

    body{
        height: 950px;
        background: linear-gradient(224.54deg, #ACAE39 24.8%, #1B3A16 99.09%);
    }

    .paymentpane{
        position: absolute;
        width: 700px;
        height: 800px;
        left: 615px;
        top: 82px;

        background: #FFFFFF;
        box-shadow: 0px 15px 8px rgba(0, 0, 0, 0.4);
        border-radius: 100px;
    }

    .line{
        position: absolute;
        width: 700px;
        height: 0px;
        left: 0px;
        top: 146px;

        border: 1px solid #000000;
    }

    .img{
        position: absolute;
        width: 707px;
        height: 151px;
        left: -4px;
        top: -3px;

        background: url(./payment-ebook.png);
        border: 0px;
    }

    .lpayment{
        position: absolute;
        width: 485px;
        height: 59px;
        left: 107px;
        top: 278px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-size: 48px;
        line-height: 59px;
        color: #9C5F5F;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .tickimg{
        position: absolute;
        width: 460px;
        height: 345px;
        left: 120px;
        top: 337px;

        background: url(./tickmark.png);
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }

    .proceedbtn{
        position: absolute;
        width: 238px;
        height: 55px;
        left: 231px;
        top: 709px;

        transition: 0.7s;

        background: #AA5858;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
    }

    .proceedbtn:hover{
        background-color:#D61212 ;
    }


</style>

<?php
            
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebooks";

    $conn = new mysqli($servername, $username, $password,$dbname);

    $cusernameq = "select username from curuser";
    $result = $conn -> query($cusernameq);

    if($result -> num_rows>0){
        while($row = $result -> fetch_assoc()){
            $curusername = $row['username']; 
        }
    }

    $incrq = "update sign_up set booksread = booksread + 1 where username ='" . $curusername . "'";
    $increr = $conn ->query($incrq);

    $randtransid = rand(100,100000);
    
    $curdatetimeq = "select now()";
    $dtresult = $conn -> query($curdatetimeq);
    if($dtresult -> num_rows>0){
        while($dtrow = $dtresult -> fetch_assoc()){
            $curdatetime = $dtrow['now()'];
        }
    }

    $transidq = "insert into transactions(transid,user,time) values('$randtransid','$curusername','$curdatetime')";

    if(mysqli_query($conn,$transidq)){
        echo "Successful transaction rec";
    }
    else{
        echo "Not successful transaction rec";
    }
?>
<script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
</script>
<body>
    
    <div class="paymentpane">

        <div class="line"></div>
        
        <div class="img"></div>

        <div class="lpayment">Payment successful</div>

        <div class="tickimg"></div>

        <div class="proceedbtn">
            <button type="button" id="proceedbtn" style="width: 238px;height: 55px;left: 231px;top: 709px;background: transparent;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;border: 0px;font-family: 'Saira';font-style: normal;font-weight: 400;font-size: 24px;line-height: 38px;color: #FFFFFF;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" onclick="javascript:location='./showcase.php'">Close</button>
        </div>


    </div>



</body>




</html>