<?php
$from="duduwamama@gmail.com";
$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$header = 'From:'.$from;
$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) {
echo "Message sent successfully...";
}else {
echo "Message could not be sent...";
}
?>
