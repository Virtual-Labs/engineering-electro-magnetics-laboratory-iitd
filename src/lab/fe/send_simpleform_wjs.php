<?php
// If any of the fields are empty, redisplay the e_mail form.
if (($_POST[sender_name] == "") || ($_POST[sender_email] == "") || ($_POST[message] == ""))
{
  header("Location: simple_form_wjs.htm");
  exit;
}
$msg = "You have received e-mail sent to you from your simple e-mail form:\n\n";
$msg .= "Sender's Name: $_POST[sender_name]\n";
$msg .= "Sender's E-Mail: $_POST[sender_email]\n";
$msg .= "Message: $_POST[message]\n\n";

$to = "webmaster@admin.iitd.ac.in";
$subject = "Feedback from e-mail form.";
$mailheaders = "From: Simple e-mail form \n";
$mailheaders .= "Reply-To: $_POST[sender_email]\n\n";

mail($to, $subject, $msg, $mailheaders);

?>

<HTML>
<HEAD>
<TITLE>Confirmation feedback for the visitor.</TITLE>
</HEAD>
<BODY>

<H1>The following e-mail has been sent:</H1>

<P><B>Your Name:</B><BR>
<?php echo "$_POST[sender_name]"; ?></P>

<P><B>Your E-Mail Address:</B><BR>
<?php echo "$_POST[sender_email]"; ?></P>

<P><B>Message:</B><BR>
<?php echo "$_POST[message]"; ?></P>

<P><B>Thank you very much.</B></P>

<P><a href="simple_form_wjs.htm">Return to the simple e-mail form with JavaScript.</a></P>

</BODY>
</HTML>