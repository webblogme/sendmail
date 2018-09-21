<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php
//require 'vendor/phpmailer/phpmailer/class.phpmailer.php';
require 'vendor/Autoload.php';

/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

$from     = isset($_POST['from']) ? $_POST['from']        : '';
$password = isset($_POST['password']) ? $_POST['password']: '';
$to       = isset($_POST['to']) ? $_POST['to']            : '';
$smtp     = isset($_POST['smtp']) ? $_POST['smtp']        : '';
$port     = isset($_POST['port']) ? $_POST['port']        : '';
$message  = isset($_POST['message']) ? $_POST['message']  : '';
$subject  = isset($_POST['subject']) ? $_POST['subject'] : '';
$enable_debug=isset($_POST['debug']) ? $_POST['debug'] : '';


/*
Less secure app access NEEDED.

Some apps and devices use less secure sign-in technology, which makes your account more vulnerable. You can turn off access for these apps, which we recommend, or turn on access if you want to use them despite the risks.
*/

require 'vendor/autoload.php';
$mail = new PHPMailer;

//Enable SMTP debugging
// 0               = off (for production use)
// 1               = client messages
// 2               = client and server messages
$mail->SMTPDebug   = ($enable_debug == 1 ? 2 : 0);
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host       = $smtp;                 // Specify main and backup server
$mail->Port       = $port;                                    // Set the SMTP port
$mail->SMTPAuth   = true;                               // Enable SMTP authentication
$mail->Username   = $from;                // SMTP username
$mail->Password   = $password;                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From       = $from;
$mail->FromName   = $from;
$mail->AddAddress($to, $to);  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = strip_tags($message);

echo '<br>';
echo '<br>';
echo '<br><center>';

if(!$mail->Send()) {

   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   echo '</center>';
   exit;
}

echo 'Message has been sent';
echo '</center>';

?>

</body>
</html>