<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) && !empty($_POST['contactemail'])) {
	$to = 'your@email.com'; // Your e-mail address here.
	$body = "Name: {$_POST['contactname']}\nEmail: {$_POST['contactemail']}\n\n{$_POST['contactmessage']}";
	mail($to, "Message from yoursite.com", $body, "From: {$_POST['contactemail']}"); // E-Mail subject here.
    }
}
?>