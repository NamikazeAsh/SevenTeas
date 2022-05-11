<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sign Up</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Nunito+Sans:wght@300&family=Saira&display=swap" rel="stylesheet">

</head>


<style>

    *{
        margin:0;
        padding: 0;
        font-family: 'Luxurious Roman', cursive;
    }

    .bg{
        background-image: url(./background.jpg);
        width:100%;
        height: 100vh;
        background-position:center;
        background-size: cover;
        position: relative;
    }

    .navbar{
        background: rgba(144, 119, 119, 0.1);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-links{
        flex: 1;
        text-align: right;
    }

    .navbar-links ul li{
        list-style: none;
        display: inline-block;
        padding: 20px 20px;
        position:relative;
    }

    .navbar-links ul li a{
        color: #fff;
        text-decoration: none;
        font-size: 25px;
    }

    .navbar-links ul li::after{
        content: '';
        width: 0%;
        height: 2px;
        background: #d38581;
        display: block;
        margin: auto;
        transition: 0.5s;
    }

    .navbar-links ul li:hover::after{
        width: 100%;
    }

    .navbar-links ul li:hover::after{
        width: 100%;
    }

    .logo{
        background-image: url(./logo.png);
        position: absolute;
        background-position: center;
        width: 750px;
        height: 550px;
        left: 600px;
        top: 10px;
        overflow: hidden;

        display: flex;
    }

    .line1{
        position: absolute;
        width: 144px;
        height: 0px;
        left: 820px;
        top: 745px;

        border: 1px solid #FFFFFF;
        transform: rotate(-0.39deg);
    }

    .line2{
        position: absolute;
        width: 144px;
        height: 0px;
        left: 1015px;
        top: 745px;

        border: 1px solid #FFFFFF;
        transform: rotate(-0.39deg);
    }

    .lusername{
        position: absolute;
        width: 118px;
        height: 33px;
        left: 780px;
        top: 378px;
        font-family: Nunito Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 33px;
        color: #FFFFFF;
        display: flex;
    }

    .lpassword{
        position: absolute;
        width: 112px;
        height: 33px;
        left: 782px;
        top: 479px;
        font-family: Nunito Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 33px;
        color: #FFFFFF;

        display: flex;
    }

    .fusername{
        position: absolute;
        width: 254px;
        height: 30px;
        left: 1000px;
        top: 381px;
        border-width: 0px;
    }

    .fusername::placeholder{
        color: aliceblue;
    }

    .fpassword{
        position: absolute;
        width: 254px;
        height: 30px;
        left: 1000px;
        top: 480px;
        border-width: 0px;
    }

    .forgotphl{
        position: absolute;
        top: 510px;
        left: 1080px;
        color: white;
        font-family: Nunito Sans;
        font-size: 13px;
        font-weight:100;
    }

    .loginbox{
        position: absolute;
        width: 125px;
        height: 41px;
        left: 925px;
        top: 630px;
        transition: 0.6s;
        
        background: #926B3E;
    }

    .loginbox:hover{
        background-color: #86571D9C;
    }

    .signupbox{
        position: absolute;
        width: 125px;
        height: 41px;
        left: 925px;
        top: 830px;
        background: #BD986C;

        transition: 0.6s;
    }

    .signupbox:hover{
        background-color: #BD986C8C;
    }

    .or{
        position: absolute;
        width: 19px;
        height: 25px;
        left: 980px;
        top: 730px;

        font-family: Proza Libre;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        line-height: 25px;
        color: #FFFFFF;
    }

    .forgotpasswordpane{
        display: none;

        transition: 0.8s;
        position: absolute;
        width: 507px;
        height: 530px;
        left: 54px;
        top: 340px;

        background: linear-gradient(180deg, #6A562E 0%, #292826 100%);
        filter: drop-shadow(5px 10px 4px rgba(0, 0, 0, 0.59));

        border-radius: 20px;
    }

    .fptext{
        position: absolute;
        width: 255px;
        height: 39px;
        left: 130px;
        top: 5px;

        font-family: Nunito Sans;
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 39px;
        color: #FFFFFF;
    }

    .fpemail{
        position: absolute;
        width: 255px;
        height: 39px;
        left: 20px;
        top: 100px;

        font-family: Nunito Sans;
        font-style: normal;
        font-weight: 400;
        font-size: 25px;
        line-height: 39px;
        color: #FFFFFF;
    }

    .fpseccode{
        position: absolute;
        width: 255px;
        height: 39px;
        left: 20px;
        top: 250px;

        font-family: Nunito Sans;
        font-style: normal;
        font-weight: 400;
        font-size: 25px;
        line-height: 39px;
        color: #FFFFFF;
    }

    .fpnewp{
        position: absolute;
        width: 255px;
        height: 39px;
        left: 20px;
        top: 175px;

        font-family: Nunito Sans;
        font-style: normal;
        font-weight: 400;
        font-size: 25px;
        line-height: 39px;
        color: #FFFFFF;
    }

    .fpemailf{
        position: absolute;
        width: 254px;
        height: 30px;
        left: 220px;
        top: 105px;

        /* background: rgba(196, 196, 196, 0.35); */
    }

    .fpsecf{
        position: absolute;
        width: 254px;
        height: 30px;
        left: 220px;
        top: 255px;

        /* background: rgba(196, 196, 196, 0.35); */
    }

    .fpnewpf{
        position: absolute;
        width: 254px;
        height: 30px;
        left: 220px;
        top: 182px;
    }
    
    .rbtn{
        position: absolute;
        width: 125px;
        height: 41px;
        left: 175px;
        top: 450px;
        transition: 0.7s;
        background: #726351;
    }

    .rbtn:hover{
        background-color:#6A562E;

    }

</style>


<script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null };
</script>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebooks";

    $conn = new mysqli($servername, $username, $password,$dbname);

    $loginchkq = "select username,password from curuser";
    $loginchkr = $conn -> query($loginchkq);

    if($loginchkr -> num_rows == 1){
        echo "Already logged in";
        echo "<script>window.location.href='./dashboard.php';</script>";
    }


    if(isset($_POST['submit'])){

        $uname = $_POST['fusername'];
        $pword = $_POST['fpassword'];

        $sql= "select username,passwordsignup from sign_up where username ='" .$uname. "' AND passwordsignup = '" .$pword. "' limit 1";
        
        $result = $conn -> query($sql);

        if($result -> num_rows == 1){

            if($uname == "admin"){
            }
            
            else{
                echo "<script>window.location.href='./showcase.php';</script>";
            }

            $sql2 = "insert into curuser(username,password) values('$uname','$pword')";
                
            if(mysqli_query($conn,$sql2)){
                echo "Successful curuser";
            }
            else{
                echo "Not successful curuser";
            }            
        }


        else{
            $msg = "Invalid creds";
            echo "<script>alert('$msg')</script>";
        }

    }

?>

<script>
    function fphun(){
        var x = document.getElementById("forgotpasswordpane");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

<body>
    
    <div class = "bg">

        <div class="navbar">  
            
            <div class="displaycuser" style="padding-left:20px;font-size: 25px;color:white;font-family:Montserrat;">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "ebooks";
                
                    $conn = new mysqli($servername, $username, $password,$dbname);
                    
                    $checkuq = "select * from curuser";
                    $checkuqr = $conn -> query($checkuq);

                    if($checkuqr -> num_rows == 1){
                        $dispu = $checkuqr -> fetch_assoc();
                        echo $dispu["username"];
                    }
                    
                ?>
            </div>

            <div class="navbar-links">
                <ul>
                    <li><a href="./ria/homepg.php" style = "font-size: 18px;">Home</a></li>
                    <li><a href="./ria/aboutpg.php" style = "font-size: 18px;">About</a></li>
                    <li><a href="./showcase.php" style = "font-size: 18px;">Showcase</a></li>
                    <li><a href="http://localhost/browse.php" style = "font-size: 18px;">Browse</a></li>
                    <li><a href="http://localhost/dashboard.php" style = "font-size: 18px;">Dashboard</a></li>
                    <!-- <li><a href="http://localhost/login.php" style = "font-size: 18px;">Login | SignUp</a></li> -->
                </ul>
            </div>
        </div>

        <div class="logo">
        </div>

        <div class="line1">
        </div>

        <div class="line2">
        </div>





        <form name="loginsignup" class="loginform" id="loginform" method="post" onsubmit="loginClick()">

            <div class="lusername">
                Username 
            </div>

            <div class="lpassword">
                Password 
            </div>

            <div class="fusername">
                <input type="text" name="fusername" id="fusername" style="font-size: 23px; background-color: rgba(196, 196, 196, 0.35);color:antiquewhite;border: 0px;" required>
            </div>
            
            <div class="fpassword">
                <input type="password" name = "fpassword" id="fpassword" style="font-size: 23px; background-color: rgba(196, 196, 196, 0.35);color:antiquewhite;border: 0px;" required>
            </div>

            <div class="loginbox">
                <button type="submit" name="submit" style="font-size: 17px;font-weight: bold;background-color: transparent;color: white;width: 125px;height: 41px;border: transparent;font-family:Nunito Sans;">Login</button>
            </div>

        </form>

        <div class="or">
            or
        </div>

        <div class="signupbox">
            <button type="button" id="signup" style="font-size: 17px;font-weight: bold;background-color: transparent;color: white;width: 125px;height: 41px;border: transparent;font-family:Nunito Sans;">Sign Up</button>
        </div>

        <div class="forgotphl">
            <a style="font-family: Nunito Sans;text-decoration:none;color:white;" href="javascript:fphun()">Forgot Password</a>
        </div>
        

        <div class="forgotpasswordpane" id="forgotpasswordpane">

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ebooks";
            
                $conn = new mysqli($servername, $username, $password,$dbname);
            
                if(isset($_POST['resetp'])){

                    $forgemail = $_POST['fpemailf'];
                    $forgsec = $_POST['fpseccodef'];

                    $cusernameq = "select username from curuser";
                    $curesult = $conn -> query($cusernameq);
                
                    if($result -> num_rows>0){
                        while($row = $curesult -> fetch_assoc()){
                            $curusername = $row['username']; 
                        }
                    }

                    $newpassword = $_POST['fpnewpw'];
                    
                    $replacepwq = "update sign_up set passwordsignup = '" . $newpassword . "' where email_id = '" . $forgemail . "' and seckey = " . $forgsec;

                    if ($conn->query($replacepwq) === TRUE) {
                        echo "<script>alert('Changed password successfully')</script>";
                    } 

                    else {
                        echo "Error updating record: " . $conn->error;
                    }

                }
            ?>

            <div class="fptext">Forgot Password</div>
            <div class="fpemail">Email</div>
            <div class="fpseccode">Security Code</div>
            <div class="fpnewp">New Password</div>

            <form name="fpform" id="fpform" method="post">

                <div class="fpemailf">
                    <input type="text" name="fpemailf" id="fpemailf" style="font-size: 23px; background-color: rgba(196, 196, 196, 0.35);color:antiquewhite;border: 0px;">
                </div>

                <div class="fpsecf">
                    <input type="password" name="fpseccodef" id="fpseccodef" style="font-size: 23px; background-color: rgba(196, 196, 196, 0.35);color:antiquewhite;border: 0px;">
                </div>

                <div class="fpnewpf">
                    <input type="password" name="fpnewpw" id="fpnewpw" style="font-size: 23px; background-color: rgba(196, 196, 196, 0.35);color:antiquewhite;border: 0px;">
                </div>
                
                <div class="rbtn">
                    <button type="submit" name="resetp" style="position: absolute;width: 125px;height: 41px;background:transparent;border:0px;font-family:Nunito Sans;color:white;font-size:20px">Reset</button>
                </div>

            </form>
        </div>

    </div>
    

</body>








</html>