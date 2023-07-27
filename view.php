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
                <li><a class="active" href="view.php">Hire</a></li>
                <li><a href="rent.html">Rent</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div id="google_element" style="position: absolute;right: 0px;padding:0 50px;"></div>
<script src= "http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement(
        "google_element");
    }
    </script>

<br>
<h1 style="padding:0 50px;">EQUIPMENTS AVAILABLE TO BE HIRED:<br></h1><hr><br>

<?php
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "login";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

  $query = "select * from images order by created desc";
  $query_run = mysqli_query($db,$query);
  $check_equipment = mysqli_num_rows($query_run ) > 0;
  

  if($check_equipment)
  {
  while($row = mysqli_fetch_assoc($query_run ))
 {
   ?>
   
   <div class="container">
        <div class="row">
            <img class="img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"width='250' height='200' />
            <h3 class="card-title">Equipment: <?php echo $row['equip']; ?> </h3>
            <h3 class="card-title">Owner Name: <?php echo $row['owner_name']; ?> </h3>
            <h3 class="card-title">Location: <?php echo $row['location']; ?> </h3>
            <h3 class="card-title">Rent per hour: ₹<?php echo $row['rent_per_hour']; ?> </h3>
            <h3 class="card-title">Contact Number: <?php echo $row['contact_number']; ?> </h3>
            <h3 class="card-text">
                Description: <?php echo $row['description']; ?></h3></li>

        </div>
    </div>

<?php
 }
}
else
{
 echo"No record Found";
}

?>
<footer>
        <p class="tag"> © 2022 Krishi Rentals. All Rights Reserved |</p>
        </footer>
    <style>
    .tag{
        padding:10px;
        position: relative;
        bottom: 0;
        width:100%;
        Font-size: 4mm;
        background-color: white;
        text-align:center;
        color:black;
        margin-bottom:0%;
        margin-top:2%;
        }
    .container{
        display:inline-block;
        padding:0;
        margin-left:40px;
        margin-right:40px;
        float:center;
    }
    .card-title,.card-text{
        
        text-align:justify;
        colspan:1px;
        padding:none;
        position:relative;
        margin-left: 20px;
        margin-right: 20px;
        column-gap:1px;
        color:black;}
    .img{
    colspan:2px;
    padding:none;
    display:inline-block;
    margin-top:1cm;
    margin-bottom:1cm;
    position:relative;
    margin-left: 20px;
    margin-right: 20px;
    column-gap:2px;
}
ul li{
    display:inline-block;
}
    </style>
</div>
</div>
</body>
</html>
