<?php
$errors = '';
$myemail = 'ms@schmittformatik.de';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Fehler: Alle Felder müssen ausgefüllt sein!";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Fehler: Ungültige E-Mail Addresse!";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Kontaktformular schmittformatik.de: $name";
$email_body = "You have received a new message. ".
"Here are the details:\nName: $name \n".
"Email: $email_address\nMessage \n$message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: thank_you.html');
} else {
    header('Location: error_message.html');
}
?>