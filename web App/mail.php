
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$number = $_POST['mobile'];
$graduation = $_POST['grade'];
$message= $_POST['message'];


$to = "Info@quantumanalytics.in";

$subject = "Mail From quantumAnalytics";
$txt ="Name = ". $name . "\r\n Email = " . $email ."\r\n Mobile number =". $number ."\r\n Graduation =".$graduation. "\r\n Message =" . $message ;

$headers = "From: noreply@quantumanalytics.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
 