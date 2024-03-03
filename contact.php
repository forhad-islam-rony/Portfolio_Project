<?php

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$subject = $_POST['user_subject'];
$message = $_POST['user_nessage'];


$con = mysqli_connect('localhost','root','','portfolio');
if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
}
else{
    $stmt = $con->prepare("insert into guest_messages(name,email,subject,message)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$subject,$message);
    $stmt->execute();

    
// $mailheader = "From:".$name."<".$email.">\r\n";
// $recipient = "forhadrony161@gmail.com";

// mail($recipient,$subject,$message,$mailheader)
// or die("Error!");


echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forhad Islam Rony</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>

        <p class="back">Go back to the <a href="index.php">Portfolio</a>.</p>
    </div>
</body>
</html>

';

$stmt->close();
$con->close();
}


?>