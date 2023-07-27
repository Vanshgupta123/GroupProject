<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishi Rentals</title>
    <link rel="stylesheet" href="home.css" crossorigin="anonymous">


</head>
    <body style="background-color:white"></style>
        <nav style="position:relative;">
            <label class="logo">Krishi Rentals</label>
            <ul>
                <li><a class="active" href="try.php">About</a></li>
                <li><a href="view.php">Hire</a></li>
                <li><a href="rent.html">Rent</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div id="google_element" style="position: absolute;right: 0px;padding:0 50px;">
<script src= "http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement(
        "google_element");
    }
    </script></div>
    <div class="welcome"><br>
        <h3 style="color:black; text-align:left;padding:0 50px"><?php echo  "Welcome ". $_SESSION['username']?> !</h3>
        <img class="img1" src="farm2.webp"><br>
        <h1>About Krishi Rentals</h1></style><br>
        <p>Krishi Rentals provides solution to the problem: <br>At a given time farmer equipment's are idle during non seasons. A platform that allows farmers to rent farming equipment for less during off season. A simple aggregation platform with call centre support that functions of booking equipment's. This will help farmers make additional income.
            Krishi Rentals is an initiative to increase easy access to farm mechanization solutions through rental of tractors and farm equipment for small and large farms.
            Small and marginal farmers, who hold more than 80% of the land holdings in India may not be able to afford ownership of tractors or implements.<br><br> Krishi Rentals bridges this gap by connecting these farmers with tractor and equipment owners through its Farmer-2-Farmer platform. Farmers can explore and book nearby equipment through: KRISHI RENTALS.
            This free app connects farming equipment owners and Custom Hiring Centres (CHCs) operated by equipment owners directly to farmers seeking farm mechanization solutions, thereby facilitating a fair and transparent rental process while focusing on quality, dependability and timely delivery.<br><br> Krishi Rentals Services offers the farmers and renters a wide range of prospects for hiring and renting of farm equipment and connects them directly to negotiate and fulfil their respective requirement.

Currently, Krishi Rentals Services (KRS) operates in Rajasthan, Gujarat, Madhya Pradesh (MP), Uttar Pradesh (UP), Haryana, Punjab, Maharashtra, Bihar, Odisha, Jharkhand, Chhattisgarh, Telangana, Andhra Pradesh, Tamil Nadu, Karnataka and Assam - making farm mechanization viable and affordable to all. Krishi Rentals is further fostering digital empowerment of Indian farmers while creating a breed of new rural entrepreneurs, significant job opportunities and employment.

        </p><br>
             <table>
                <h4>How Krishi Rental works:</h4>
                <td><img class="img"src="farmer 1.gif" ></td>
                <td><img class="img"src="farmer 2.gif" ></td>
                <td><img class="img"src="farmer 3.gif" ></td>
                <td><img class="img"src="farmer 4.gif" ></td>
                <td><img class="img"src="farmer 5.gif" ></td>
            </table><br>


        <h1>On call Service:</h1><br>
        <p>We are also available on phone. You can rent and hire through our call support system.</p><p>Numbers available are:<br>1800-201-842<br>1800-201-843</p>
        <footer>
        <p class="tag">© 2022 Krishi Rentals. All Rights Reserved | </p>
        </footer>
        <style>
            .welcome h3{
                text-align:center;
                text-transform: uppercase;
                position:relative;
                left: 50%;
                padding:0mm;
                transform: translate(-50%, -50%);
            }

                
            .img1{
                display:block;
                margin-top:0%;
                padding:0 50px;
                width:100%;
                height:600px;
                margin-left:0 50px;
                margin-right:10px;

            }
            
            .img{ 
                width:150px;
                height:200px;
                margin:0 50px;
            }
        h1,h4{
            padding: 0 50px;
            margin:auto;
            border: 5px;
            color:black;

        }
        ul il, p{
            border: 5px;
            padding: 0 50px;
            Font-size: 5mm;
            margin: auto;
            color:black;
            text-align: justify;
        }
        .tag{
        padding:10px;
        position: relative;
        bottom: 0;
        width:100%;
        Font-size: 4mm;
        background-color: white;
        text-align:center;
        color:black;
        margin-bottom: 0%;
        }
    </style>
    
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
 
    
      
        
        
        
        
        
        
        
        
        
        
        