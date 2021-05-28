<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "kondaveeti_aashritha@srmap.edu.in";
$subject = "Feedback From website";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .

"CC: vijay_kashyap@srmap.edu.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:home.html");
?>