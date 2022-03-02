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

<p style="font-size: 18px; margin: 20px;">THANK YOU for contacting me! I will contact you soon.</p>
<p style="color: green; font-size: 18px; margin: 20px;">Returning to www.upneto.com 

<script>
  // Sendes user back to front page after submitting form
    window.setTimeout(function() {
    window.location.href = 'https://upneto.com/index.html';}, 6000);
</script>