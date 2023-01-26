
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];
$to = "eukh1234@gmail.com";
$subject = $subject;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>