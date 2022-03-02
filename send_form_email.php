<?php
if(isset($_POST['submit'])) {

$to      = 'contact@upneto.com';
$subject = 'Message from upneto.com';
$message = $_POST['message'];
$headers = array(
    'From' => $_POST['email'],
    'Reply-To' => 'no-reply@upneto.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
}
?>

<!-- include your own success html here -->

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank you</title>
	<style>
	    .d-flex{
	        display: flex;
	        flex-direction: column;
	        align-items: center;
	    }
	    .text-center{
	        text-align: center;
	    }
	</style>
</head>
<body class="d-flex">
    <img src="thank-you.png" alt="Thank you image" width="350">
	<h1>Message sendt!</h1>
	<div class="text-center">
		<p class="main-content__body">Thanks for contacting me. I will answer you as soon as possible.</p>
		<p>Redirecting to <b>www.upneto.com</b></p>
	</div>

</body>
</html>

<script>
  // Sendes user back to front page after submitting form
    window.setTimeout(function() {
    window.location.href = 'https://upneto.com/index.html';}, 4000);
</script>
