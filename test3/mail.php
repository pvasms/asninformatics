<?php 
$errors = '';
$myemail = 'pvasms@gmail.com';//<-----Put Your email address here.

$name = $_POST['name']; 
$email = $_POST['email'];
$subject = $_POST['subject']; 
$mesg = $_POST['mesg']; 


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Inquiry Form: $name";
	$email_body = "You have received a new message from INQUIRY. \n \nHere are the inquiry details:\n \n NAME : $name \n EMAIL : $email \n SUBJECT : $subject \n  MESSAGE : $mesg \n \n \n NOTE:-THIS IS AN AUTO-GENERATED MAIL DO NOT REVERT BACK ON THIS"; 
	
	$head="asninformatics.com";
	$headers = "From: $head<$email>\n"; 
	$headers .= "Reply-To: $email";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	//header('Location: thankyou.php');
} 
?>
 <script>
alert('Your mail has been successfuly send.....');
window.location='index.html';
</script>