<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@upneto.com";
    $email_subject = "Message from UPNETO Website";
  
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

?>
 
<!-- include your own success html here -->

<p style="font-size: 18px; margin: 20px;">THANK YOU for contacting me! I will contact you soon.</p>
<p style="color: green; font-size: 18px; margin: 20px;">Returning to www.upneto.com 

<script>
  // Sendes user back to front page after submitting form
    window.setTimeout(function() {
    window.location.href = 'https://upneto.com/index.html';}, 6000);
</script>


<?php
exit();
}
?>


