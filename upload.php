<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $txtEquip = $_POST['txtEquip'];
            $txtName = $_POST['txtName'];
            $txtRent = $_POST['txtRent'];
            $txtlocation = $_POST['txtlocation'];
            $txtPhone = $_POST['txtPhone'];
            $txtMessage = $_POST['txtMessage']?stripslashes($_POST['txtMessage']):"";

            // Insert image content into database 
            $insert = $db->query("INSERT into images (image,equip,owner_name,contact_number,rent_per_hour,location,description,created) VALUES ('$imgContent','$txtEquip','$txtName','$txtPhone','$txtRent','$txtlocation','$txtMessage', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "Equipment details uploaded successfully."; 
                
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
                
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
           
        } 
    }else{ 
        $statusMsg = 'Information Missing...'; 
        
    } 
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
                <li><a class="active" href="rent.html">Rent</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <center>
<div class="echo">
<?php 
if($statusMsg=="Equipment details uploaded successfully.") {
    echo '<img src="check-mark.gif" width="300px" height="300px" >';
                }
                else{
                    echo '<img src="fail.gif" width="300px" height="300px" >';
                }
                 ?></div>
                <div class="message">
                <?php 
                echo $statusMsg;
 ?></div></center>
 <form><button><a href="rent.html" style="margin-bottom:20px;margin-top:10px;color:white;">BACK</a></button></form>
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
        font-size:25px}
    .echo{
        float:center;
        padding:50px;
        
    }
    </style>
 </body>
 </html>