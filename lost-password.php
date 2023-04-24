<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'header.php';

$to = "test@test.com";
$subject = "Forgot Password";
$message = "Please follow the below instructions to reset the password";

mail($to,$subject,$message);

?>

<?php
include 'footer.php';
?>
