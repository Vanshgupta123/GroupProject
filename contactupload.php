<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','login');

// get the post records
$name= $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$place = $_POST['place'];

// database insert SQL code
$sql = "INSERT INTO `contact` (`Id`, `name`, `email`, `phone`, `place`) VALUES (' ', '$name', '$email', '$phone', '$place')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs){
	$statusmessage="Contact Records Inserted";
}else{
	$statusmessage="Try Again...";
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
    <body style="background-image:url('.webp');
                 background-color:#ace7f4;
                 background-repeat:no-repeat;
                 background-size:cover;
                 background-position: relative;">
        <nav style="position:relative;" >
            
            <label class="logo">Krishi Rentals</label>
            <ul>
                <li><a href="try.php">About</a></li>
                <li><a  href="view.php">Hire</a></li>
                <li><a  href="rent.html">Rent</a></li>
                <li><a  class="active"href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <center>
<div class="message">
<?php 
if($statusmessage="Contact Records Inserted")
{
    echo '<img src="check-mark.gif" width="300px" height="300px" >';
                }
                else{
                    echo '<img src="fail.gif" width="300px" height="300px" >';
                }
                 ?></div>
                <div class="message">
                <?php 
                echo $statusmessage;
 ?></div></center>
 <form><button><a href="contact.html" style="margin-bottom:20px;margin-top:10px;color:white;">BACK</a></button></form>
 <footer>
        <p class="tag">© 2022 Krishi Rentals. All Rights Reserved | </p>
        </footer>
        
 <style>
    .tag{
    padding:10px;
    position: absolute;
    bottom: 0;
    width:100%;
    Font-size: 4mm;
    background-color: white;
    text-align:center;
    color:black;
    margin-bottom:0%;
    }
    .message{
        font-weight: bold;
        text-align:center;
    	padding-bottom:20px;
		font-size:25px;
        float:center;
        padding:50px;
		padding-bottom:20px
        
    }
	
    </style>
 </body>
 </html>