<?php
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__ . '/vendor/autoload.php';
require 'head/header.php';
use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "AC18031b2eea8da618a63bdfed2f9a5070";
$token  = "867cb471ee8f23906d872d92cc4254c9";
$twilio = new Client($sid, $token);

if(isset($_POST['sent'])) {
	$message = $twilio->messages
                  ->create("+63 993 884 7440", // to
                           array(
                               "body" => $_POST['message'],
                               "from" => "+12187789756"
                           )
                  );

	//print($message->sid);
	echo "<script>
                                 Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Sent',
                                showConfirmButton: false,
                                timer: 1000 
                            }).then(function() {
                                window.location.href = 'admin_page.php#resume';
                              })
                              </script>";        
}
?>