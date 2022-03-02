<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@upneto.com";
    $email_subject = "Message from UPNETO Website";
 
    // function died($error) {
    //     // your error code can go here
    //     echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    //     echo "These errors appear below.<br /><br />";
    //     echo $error."<br /><br />";
    //     echo "Please go back and fix these errors.<br /><br />";
    //     die();
    // }
 
 
    // // validation expected data exists
    // if(!isset($_POST['first_name']) ||
    //     // !isset($_POST['last_name']) ||
    //     !isset($_POST['email']) ||
    //     // !isset($_POST['telephone']) ||
    //     !isset($_POST['comments'])) {
    //     died('We are sorry, but there appears to be a problem with the form you submitted.');       
    // }
 
  
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
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
    // window.setTimeout(function() {
    // window.location.href = 'https://upneto.com/index.html';}, 6000);
      

</script>


<?php
exit();
}
?>


