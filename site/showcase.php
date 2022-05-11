<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcase</title>

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

.tbestpicks{

    position: absolute;
    width: 244px;
    height: 65px;
    left: 865px;
    top: 70px;

    font-family: 'Montserrat';
    font-weight: 700;
    font-size: 40px;
    line-height: 65px;
    color: #FFFFFF;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 2);

}

.ellipse{
    position: absolute;
    width: 272px;
    height: 19px;
    left: 830px;
    top: 115px;

    background: rgba(191, 107, 107, 0.37);
    border-radius: 50%;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 2);
    }

.actioncontainer{
    position: absolute;
    width: 760px;
    height: 313px;
    left: 132px;
    top: 216px;

    background: rgba(102, 84, 84, 0.67);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    }

.thrillercontainer{
    position: absolute;
    width: 760px;
    height: 313px;
    left: 1042px;
    top: 216px;

    background: rgba(102, 84, 84, 0.67);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    }

.romancecontainer{

    position: absolute;
    width: 760px;
    height: 313px;
    left: 132px;
    top: 610px;

    background: rgba(102, 84, 84, 0.67);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    }

.mysterycontainer{
    position: absolute;
    width: 760px;
    height: 313px;
    left: 1042px;
    top: 610px;

    background: rgba(102, 84, 84, 0.67);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;
    }

.laction{
    position: absolute;
    width: 80px;
    height: 33px;
    left: 472px;
    top: 182px;

    font-family: 'Montserrat';
    font-style: italic;
    font-weight: 700;
    font-size: 24px;
    line-height: 33px;

    color: #FFFFFF;
}

.lthriller{
    position: absolute;
    width: 92px;
    height: 53px;
    left: 1376px;
    top: 182px;

    font-family: 'Montserrat';
    font-style: italic;
    font-weight: 700;
    font-size: 24px;
    line-height: 33px;

    color: #FFFFFF;
}

.lromance{

    position: absolute;
    width: 113px;
    height: 33px;
    left: 472px;
    top: 575px;

    font-family: 'Montserrat';
    font-style: italic;
    font-weight: 700;
    font-size: 24px;
    line-height: 33px;

    color: #FFFFFF;
}

.lmystery{
    position: absolute;
    width: 102px;
    height: 33px;
    left: 1382px;
    top: 575px;

    font-family: 'Montserrat';
    font-style: italic;
    font-weight: 700;
    font-size: 24px;
    line-height: 33px;

    color: #FFFFFF;
}



</style>




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


        <div class="tbestpicks">
            Best Picks
        </div>
        
        <div class="ellipse">
        </div>

        <div class="actioncontainer">

            <marquee scrollamount="6">
                <a href="./payment.php"><img src="./bookassets/hpazkaban.png" title="Harry Potter & The Prisoner Of Azkaban&#013;&#013;Harry, Ron and Hermoine return to Hogwarts just as they learn about Sirius Black and his plans to kill Harry. However, when Harry runs into him, he learns that the truth is far from reality." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/lotr.png" title="Lord of The Rings&#013;&#013;A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed." style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/pjlightning.png" title="Percy Jackson : The Lightning Thief&#013;&#013;Percy, who has dyslexia, is surprised to discover that he is a demigod. When he is accused of stealing Zeus's lightning bolt, he sets off to find the bolt and settle the fight between the gods." style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/lordoftheflies.png" title="Lord Of The Flies&#013;&#013;Lord Of The Flies tells the story of a group of young boys who find themselves alone on a deserted island. They develop rules and a system of organization, but without any adults to serve as a civilizing impulse, the children eventually become violent and brutal" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/primarythreat.png" title="Primary Threat&#013;&#013;Elite Delta Force veteran Luke Stone, 29, leads the FBI's Special Response Team as they respond to a hostage situation on an oil rig in the remote Arctic. Yet what at first seems like a simple terrorist event may, it turns out, be much more." style="padding-top: 25px;padding: 40px;"></a>
            </marquee>

        </div>

        <div class="thrillercontainer">

            <marquee scrollamount="6">
                <a href="./payment.php"><img src="./bookassets/gonegirl.png" title="Gone Girl&#013;&#013;Nick Dunne discovers that the entire media focus has shifted on him when his wife, Amy Dunne, mysteriously disappears on the day of their fifth wedding anniversary." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/silentpatient.png" title="Silent Patient&#013;&#013;The Silent Patient is the bestselling psychological thriller book in which a woman named Alicia murders her husband, then becomes completely silent through psychological treatment, in which her doctor, Theo, is obsessed with uncovering her motive" alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/davincicode.png" title="DaVinci Code&#013;&#013;Symbologist Robert Langdon travels from Paris to London to unravel a bizarre murder. Accompanied by a cryptographer, he soon comes across a religious enigma protected by an age-old secret society." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/thenshewasgone.png" title="Then She Was Gone&#013;&#013; Then She Was Gone follows the disappearance of fifteen-year-old Ellie Mack and her mother, Laurel Mack, as she learns to cope with life without her 'Golden Girl' and how it is okay to move on in life after a tragedy." style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/yesterdaysghosts.png" title="Yesterday's Ghosts&#013;&#013;It’s been three decades since Black Team disbanded in the wake of a disastrous war in Sri Lanka. Three decades since they set eyes on each other. Three decades since they decided to lock away their secret forever.The four men, now in their fifties and sixties, have moved on with their lives, and have no intention of returning to the place where it all went wrong. However, when each of them receives a mysterious message, written in a once-familiar code, they realize that their secret has followed them home." style="padding-top: 25px;padding: 40px;"></a>
            </marquee>

        </div>

        <div class="romancecontainer">

            <marquee scrollamount="6">
                <a href="./payment.php"><img src="./bookassets/outlander.png" title="Outlander&#013;&#013;A married combat nurse from 1945 who is mysteriously swept back in time to 1743, where she is immediately thrown into an unknown world where her life is threatened." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/prideprejudice.png" title="Pride Prejudice&#013;&#013;Pride and Prejudice follows the turbulent relationship between Elizabeth Bennet, the daughter of a country gentleman, and Fitzwilliam Darcy, a rich aristocratic landowner. They must overcome the titular sins of pride and prejudice in order to fall in love and marry." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/peoplewemeet.png" title="People We Meet On Vacation&#013;&#013;In the People We Meet on Vacation, Poppy and Alex are best friends from college who have travelled together each summer for the last decade. But two years ago there was a rift in their friendship, and they haven't spoken since.With Poppy feeling dissatisfied in life despite having her dream job, she reaches back out to Alex. They agree to go on one more trip, and Poppy is determined to finally set things right." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/thornbirds.png" title="Thorn Birds&#013;&#013;The Thorn Birds is a sweeping love story set on Drogheda, a sheep station in the Australian Outback. At its heart is the ill-fated romance of beautiful Meggie Cleary and the handsome Roman Catholic priest, Father Ralph de Bricassart." style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/redwhiteroyalblue.png" title="Red White Royal Blue&#013;&#013;Red, White & Royal Blue concerns a rivalry-turned-romance between the Prince of Wales and the First Son of the United States. Alex Claremont-Diaz, whose mother is running for a second term for president, is sharp, passionate, and eager to kick-start his own political career" style="padding-top: 25px;padding: 40px;"></a>
            </marquee>

        </div>

        <div class="mysterycontainer">

            <marquee scrollamount="6">
                <a href="./payment.php"><img src="./bookassets/girlwithdragon.png" title="The Girl With The Dragon Tattoo&#013;&#013;Mikael Blomkvist, a journalist, hires Lisbeth Salander, a computer hacker, to solve the mystery of a woman who has been missing for forty years. The two discover more than they bargained for." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/murderonorient.png" title="Murder On The Orient Express&#013;&#013;After a murder takes place on a train journey, a detective decides to investigate and find the culprit amongst the passengers aboard. In the process, he also learns the true identity of the victim." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/shutterisland.png" title="Shutter Island&#013;&#013; U.S. Marshal Edward Teddy Daniels and his new partner, Chuck Aule, go on a ferry boat to Shutter Island, the home of Ashecliffe Hospital for the criminally insane, to investigate the disappearance of a patient, Rachel Solando (who was incarcerated for drowning her three children)." alt="Harry Potter : Prisoner Of Azkaban" style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/rokkanoyusha.png" title="Rokka No Yuusha&#013;&#013;An ancient legend states that with the revival of the Demon God, six heroes—the Braves of the Six Flowers—will be chosen by the Goddess of Fate, granting them power to rise up against the fiends attempting to turn the world into a living hell." style="padding-top: 25px;padding: 40px;"></a>
                <a href="./payment.php"><img src="./bookassets/another.png" title="Another&#013;&#013;The story focuses on a boy named Kōichi Sakakibara who, upon transferring into Yomiyama Middle School and meeting the curious Mei Misaki, finds himself in a mystery revolving around students and people related to his class falling victim to gruesome, senseless deaths." style="padding-top: 25px;padding: 40px;"></a>
            </marquee>

        </div>

        <div class="laction">Action</div>

        <div class="lthriller">Thriller</div>

        <div class="lromance">Romance</div>

        <div class="lmystery">Mystery</div>

    </div>
    

</body>








</html>