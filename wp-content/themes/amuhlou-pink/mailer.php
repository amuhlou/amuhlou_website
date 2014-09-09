<?php
if(isset($_POST['submit'])) {

$to = "amy@amuhlou.com";
$subject = "Message sent from amuhlou.com";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$website_field = $_POST['website'];
$message = $_POST['message'];

$body = "From: $name_field\nE-Mail: $email_field\n$website_field\nMessage:\n$message";
header("Location: /thanks"); 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);

} else {

echo "blarg!";

}
?>
