<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,100&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">

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

    .filterbox{
        position: absolute;
        width: 460px;
        height: 300px;
        left: 45px;
        top: 300px;

        background: #927E4D;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
    }

    .browsecontainer{
        position: absolute;
        width: 1360px;
        height: 700px;
        left: 550px;
        top: 231px;

        background: rgba(120, 96, 96, 0.59);
        border-radius: 20px;
        overflow-y:scroll;
    }

    ::-webkit-scrollbar{
        width: 15px;
        border-radius: 20px;
    }

    ::-webkit-scrollbar-track{
        background-color: rgba(134, 28, 28, 0.466);
        border-radius: 20px 20px;
    }

    ::-webkit-scrollbar-thumb{
        background-color: #888;
    }

    ::-webkit-scrollbar-thumb :hover{
        background-color: #555;
    }

    .browsetext{
        position: absolute;
        width: 146px;
        height: 57px;
        left: 1165px;
        top: 165px;

        font-family: Macondo;
        font-style: normal;
        font-weight: normal;
        font-size: 48px;
        line-height: 57px;
        color: #FFFFFF;
    }

    .line1{
        position: absolute;
        width: 580px;
        height: 0px;
        left: 570px;
        top: 197px;

        border: 1px solid #FFFFFF;
    }

    .line2{
        position: absolute;
        width: 580px;
        height: 0px;
        left: 1323px;
        top: 197px;

        border: 1px solid #FFFFFF;
    }

    .filterbtn{
        position: absolute;
        width: 180px;
        height: 45px;
        left: 179px;
        top: 630px;

        background: #D8A542;
        border-radius: 100px;
        text-align: center;

        transition: 0.6s;
    }

    .filterbtn:hover{
        background-color:#805808 ;
    }

    .ordercontainer{
        position: absolute;
        width: 251px;
        height: 143px;
        left: 143px;
        top: 750px;

        background: rgba(120, 96, 96, 0.59);
        border-radius: 20px;
    }

    .orderbtn{
        position: absolute;
        width: 183px;
        height: 56px;
        left: 177px;
        top: 794px;
        background:#D8A542;
        border-radius: 20px;
        border-width: 0px;
        transition: 0.6s;
    }

    .orderbtn:hover{
        background-color:#805808 ;
    }

    .tbooks{

        font-family: Montserrat;

    }

    .tbooks th {

        padding-top: 20px;
        padding-bottom: 15px;
        padding-left: 25px;
        padding-right: 27px;
        text-align: center;
        background-color: #741815;
        color: white;
        font-family: Montserrat;
        font-size: 23px;
        font-weight: bold;

        }

    .tbooks tr{
        font-size: 18px;
        background: rgba(62, 18, 18, 0.49);
        color:darkgoldenrod;
    }

    .tbooks td{
        padding: 15px;
        text-align: center;
    }

    .tbooks tr:hover{
        background-color: rgba(100, 70, 24, 0.9);
        transition: 0.7s;
    }

</style>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebooks";

    $conn = new mysqli($servername, $username, $password,$dbname);

?>



<body>
    
    <div class = "bg">
        
        <div class="navbar">  

            <div class="navbar-links">
                <ul>
                    <li><a href="" style = "font-size: 18px;">Home</a></li>
                    <li><a href="" style = "font-size: 18px;">About</a></li>
                    <li><a href="./showcase.html" style = "font-size: 18px;">Showcase</a></li>
                    <li><a href="http://localhost/browse.php" style = "font-size: 18px;">Browse</a></li>
                    <li><a href="http://localhost/dashboard.php" style = "font-size: 18px;">Dashboard</a></li>
                    <li><a href="http://localhost/login.php" style = "font-size: 18px;">Login | SignUp</a></li>
                </ul>
            </div>

        </div>

        <div class="logoimg">
            <img src="./logo.png" style="position: relative;height: 381px;width: 550px;top: -40px;left: -20px;" id="logoimg" class="logoimg">
        </div>

        <div class="filterbox">
        </div>

        <form method="POST" name="filterform">
            <div class="ratingsel">
                <select name="rating" id="rating" style="position: absolute;width: 150px;height: 30px;left: 85px;top: 334px;background-color: #C4C4C4;border-radius: 100px;font-size: 16px;text-align: center;">
                    <option value="Rating">Rating</option>
                    <option value="4.5-5">4.5-5</option>
                    <option value="4-4.5">4-4.5</option>
                    <option value="3.5-4">3.5-4</option>
                    <option value="3-3.5">3-3.5</option>
                    <option value="2.5-3">2.5-3</option>
                    <option value="2-2.5">2-2.5</option>
                    <option value="1.5-2">1.5-2</option>
                </select>
            </div>

            <div class="pricesel">
                <select name="price" id="price" style="position: absolute;width: 150px;height: 30px;left: 310px;top: 334px;background-color: #C4C4C4;border-radius: 100px;font-size: 16px;text-align: center;">
                    <option value="Price">Price</option>
                    <option value="30-35">30-35</option>
                    <option value="25-30">25-30</option>
                    <option value="20-25">20-25</option>
                    <option value="15-20">15-20</option>
                </select>   
            </div>
        
            <div class="yearsel">
                <select name="year" id="year" style="position: absolute;width: 150px;height: 30px;left: 85px;top: 400px;background-color: #C4C4C4;border-radius: 100px;font-size: 16px;text-align: center;">
                    <option value="Year">Year</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                </select>
            </div>

            <div class="genresel">
                <select name="genre" id="genre" style="position: absolute;width: 150px;height: 30px;left: 310px;top: 400px;background-color: #C4C4C4;border-radius: 100px;font-size: 16px;text-align: center;">
                    <option value="Genre">Genre</option>
                    <option value="action">Action</option>
                    <option value="thriller">Thriller</option>
                    <option value="romance">Romance</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="mystery">Mystery</option>
                    <option value="adventure">Adventure</option>
                </select>
            </div>

            <div class="searchbar">
                <input type="text" id="searchbar" placeholder="Search" name="searchbar" style="text-align: center;position: absolute;width: 202px;height:25px;left: 166px;top:540px;background: #C4C4C4;border-radius: 100px;font-size: 16px;border:0px;">
            </div>

            <div class="line1">
            </div>



            <div class="browsecontainer">

                <table class = "tbooks" id="tbooks">

                    <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Rating</th>
                        <th>ISBN</th>
                        <th>Language</th>
                        <th>Year</th>
                        <th>Prices($)</th>
                    </tr>

                    <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ebooks";
                    
                        $conn = mysqli_connect($servername, $username, $password,$dbname);

                        $sql = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks";

                        $result = $conn -> query($sql);

                        if(isset($_POST['submit'])){

                            $filrating = $_POST['rating'];
                            $filprice = $_POST['price'];
                            $filyear = $_POST['year'];
                            $filgenre = $_POST['genre'];
                            $searchbook = $_POST['searchbar'];
                    
                            if($filrating == "4.5-5"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 4.5 and 5";
                                $result = $conn -> query($ratingq);
                            }

                            else if($filrating == "4-4.5"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 4 and 4.5";
                                $result = $conn -> query($ratingq);
                            }
                            
                            else if($filrating == "3.5-4"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 3.5 and 4";
                                $result = $conn -> query($ratingq);
                            }

                            else if($filrating == "3-3.5"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 3 and 3.5";
                                $result = $conn -> query($ratingq);
                            }

                            else if($filrating == "2.5-3"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 2.5 and 3";
                                $result = $conn -> query($ratingq);
                            }

                            else if($filrating == "2-2.5"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 2 and 2.5";
                                $result = $conn -> query($ratingq);
                            }

                            else if($filrating == "1-5-2"){
                                $ratingq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where rating between 1.5 and 2";
                                $result = $conn -> query($ratingq);
                            }

                            else if($filprice == "15-20"){
                                $priceq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where prices between 15 and 20";
                                $result = $conn -> query($priceq);
                            }
                            else if($filprice == "20-25"){
                                $priceq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where prices between 20 and 25";
                                $result = $conn -> query($priceq);
                            }
                            else if($filprice == "25-30"){
                                $priceq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where prices between 25 and 30";
                                $result = $conn -> query($priceq);
                            }
                            else if($filprice == "30-35"){
                                $priceq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where prices between 30 and 35";
                                $result = $conn -> query($priceq);
                            }
                            
                            else if($filyear != "Year"){
                                $yearq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where publication_year =" . $filyear;
                                $result = $conn -> query($yearq);
                            }

                            else if($filgenre != "Genre"){
                                $genreq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where genre ='" . $filgenre."'";
                                $result = $conn -> query($genreq);
                            }

                            else if($searchbook){
                                $searchq = "select bookid,title,author,genre,rating,isbn,language,publication_year,prices from ebooks where title like '%" . $searchbook . "%'";
                                $result = $conn -> query($searchq);
                            }

                        }

                        if($result -> num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo "<tr><td>" . $row["bookid"]. "</td><td><a href='http://localhost/payment.php' style='text-decoration: none;color:darkgoldenrod;'>" . $row["title"]. "</a></td><td>" . $row["author"]. "</td><td>" . $row["genre"] ."</td><td>" . $row["rating"]. "</td><td>" . $row["isbn"]. "</td><td>" . $row["language"]. "</td><td>" . $row["publication_year"]. "</td><td>" . $row["prices"]. "</td></tr>";
                            }
                        }
                            

                    ?>

                </table>

            </div>



            <div class="browsetext" style="font-family: Macondo;">
                Browse
            </div>

            <div class="line1">
            </div>
            <div class="line2">
            </div>


            <div class="filterbtn">
                <button type="submit" name ="submit" id="filterbutton" style="font-size: 17px;width: 180px;height: 45px;border-radius: 100px;border: transparent;background:transparent;">Filter</button>
            </div>

        </form>

        <div class="ordercontainer">
        </div>

        <div class="orderbtn">
            <button type="button" id="orderbtn" style="font-size: 17px;width: 183px;height: 56px;left: 177px;top: 794px;background:#D8A542;border-radius: 20px;background: transparent;border: 0px;font-weight: 400;font-style: normal;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" onclick="javascript:location.href='./request.php'">Request</button>
        </div>

    </div>
</body>








</html>