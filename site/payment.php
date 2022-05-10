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

<script>
        
    function val(){

        let messages = [];

        var name = document.form.name.value; 
        var card = document.form.card.value; 
        var cvv = document.form.cvv.value; 
        var amt = documen.form.amt.value;
        
        if(name.length < 4 | isNaN(name) == false){
            messages.push(" •Name");
            
        }

        if(card.length!=16 | isNaN(card) == true){
            messages.push(" •Card Number");
        }

        if(cvv.length!=3 | isNaN(cvv) == true){
            messages.push(" •CVV");
        }

        if(isNaN(amt) == true){
            messages.push(" •Amount")
        }

        if(messages.length>0){
            document.getElementById("output").innerHTML = "Incorrect➤"
            for(var i = 0;i<messages.length;i++){
                document.getElementById("output").innerHTML += messages[i];
            }
            return false;
        }
        

        else if(messages.length==0){
            alert("Successful payment");
            document.location.href = 'http://localhost/paymentsuc.php'
            return true;
        }   

    }

</script>

<style>

    *{
        margin:0;
        padding: 0;
        font-family: 'Luxurious Roman', cursive;
    }

    body{
        height: 950px;
        background: linear-gradient(147.62deg, #6D2525 19.4%, #C4854B 85.92%);
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
        width: 220px;
        height: 59px;
        left: 240px;
        top: 173px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 59px;

        color: #9C5F5F;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .errormsg{
        position: absolute;
        width: 300px;
        height: 59px;
        left: 220px;
        top: 265px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        

        color: #FF0000;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .lname{
        position: absolute;
        width: 88px;
        height: 50px;
        left: 71px;
        top: 327px;

        font-family: 'Saira';
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 50px;

        color: #000000;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .lcardno{
        position: absolute;
        width: 194px;
        height: 50px;
        left: 71px;
        top: 414px;

        font-family: 'Saira';
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 50px;

        color: #000000;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .lexpiry{
        position: absolute;
        width: 172px;
        height: 50px;
        left: 71px;
        top: 506px;

        font-family: 'Saira';
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 50px;

        color: #000000;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    
    .lcvv{
        position: absolute;
        width: 61px;
        height: 50px;
        left: 71px;
        top: 595px;

        font-family: 'Saira';
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 50px;

        color: #000000;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    ::placeholder{
        font-family: 'Montserrat';
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 29px;

    color: #FFFFFF;
    text-align: center;
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

    .backbtn{
        position: absolute;
        width: 45px;
        height: 45px;
        left: 79px;
        top: 714px;
        transition: 0.7s;

        background: #C4C4C4;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
        text-align: center;
    }

    .backbtn:hover{
        background-color: #928484;
    }

    .payamtpane{
        position: absolute;
        width: 255px;
        height: 117px;
        left: 735px;
        top: 380px;

        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
    }

    .lamt{
        position: absolute;
        width: 134px;
        height: 39px;
        left: 57px;
        top: 10px;

        font-family: 'Montserrat';
        font-style: normal;
        font-weight: bold;
        font-size: 32px;
        line-height: 39px;
        color: #9C5F5F;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

</style>





<body>

    <div class="paymentpane">

        <div class="line"></div>
        
        <div class="img"></div>

        <div class="lpayment">Payment</div>

        <div id="error" class="errormsg">
            <p id="output" style="font-weight:lighter;"></p>
        </div>

        <div class="lname">Name</div>

        <div class="lcardno">Card Number</div>

        <div class="lexpiry">Expiry Date</div>

        <div class="lcvv">CVV</div>


        <form name="form" onsubmit = "return val()" action="./razorpay-api/pay.php" method="post">

            <div class="fname">
                <input type="text" id="name" placeholder="Cardholder's Name" style="position: absolute;width: 313px;height: 38px;left: 350px; top: 333px;background: #C4C4C4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 24px;line-height: 29px;color:crimson;text-align: center;border: 0px;" required>
            </div>

            <div class="fcardno">
                <input type="text" id="card" placeholder="Card's Number" style="position: absolute;width: 313px;height: 38px;left: 350px; top: 420px;background: #C4C4C4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 24px;line-height: 29px;color:crimson;text-align: center;border: 0px;" required>
            </div>

            <div class="fexpiry">
                <input type="month" placeholder="MM/YY" style="position: absolute;width: 313px;height: 38px;left: 350px; top: 513px;background: #C4C4C4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 24px;line-height: 29px;color:crimson;text-align: center;border: 0px;" required>
            </div>

            <div class="fcvv">
                <input type="password" id="cvv" placeholder="CVV" style="position: absolute;width: 313px;height: 38px;left: 350px; top: 601px;background: #C4C4C4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 24px;line-height: 29px;color:crimson;text-align: center;border: 0px;" required>
            </div>
        
            <div class="proceedbtn">
                <button type="submit" id="proceedbtn" style="width: 238px;height: 55px;left: 231px;top: 709px;background: transparent;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;border: 0px;font-family: 'Saira';font-style: normal;font-weight: 400;font-size: 24px;line-height: 38px;color: #FFFFFF;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" required>Proceed</button>
            </div>

            <div class="backbtn">
                <button type="button" id="backbtn" style="background-color: transparent;border: 0px;color: #C14F4F;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 30px;width: 28px;height: 59px;left: 87px;top: 700px;text-align: center;align-items: center;" onclick="javascript:location='http://localhost/browse.php'"><</button>
            </div>

            <div class="payamtpane">

                <div class="lamt">Amount</div>
                <div class="famt">
                    <input type="text" id="amt" name="amt" placeholder="Amount($)" style="position: absolute;top:70px;left:30px;width: 191px;height: 25px;background: #C4C4C4;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 24px;line-height: 29px;color:crimson;text-align: center;border: 0px;" required>
                </div>

            </div>


        </form>



    </div>



</body>




</html>