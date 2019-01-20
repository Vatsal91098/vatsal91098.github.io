
<?php
extract($_POST);
$to = "vatsal91098@gmail.com";
$subject = "Website Inquiry Nirma - $subject";
$txt = "Hi i'm $name,\n my email is $email , $msg";
$headers = "admin@silverwingtechnologies.com";

mail($to,$subject,$txt,$headers);
header("location:index.html");
?>