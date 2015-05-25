<?php
if(!empty($_POST)) extract($_POST);
if(!empty($_GET)) extract($_GET);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Thanks</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<style type="text/css">
body { font-family: verdana, helvetica, sans-serif, arial; font-size: 80%; background-color: #fffffd; }
h1 { font-family: helvetica, sans-serif, arial; color: #9F141A; font-size: 150%; margin-bottom: 0.2em; }}
</style>

</head>

<body>

<?php

$headers = "From: $email";
$message .= "

Virtual Engineering Electromagnetics Laboratory Feedback send to you from $email
___________________________________________________________________________________

$text
";

$message2 .= "

Thank you for your email message regarding the subject: $sub.\n
I will respond to it as quickly as I can. Please feel free to write again!\n\n
Thanking you,\n


http://web.iitd.ac.in/~virtual\n
\n\n
Your original message was
$text
";
$headers2 .= "From:abegaonkar.mahesh@gmail.com\n";
$sub2.="Feedback Verification: $sub";
$sub3 .="[Online counselling] $sub";

?> 


<h1>Thank you!</h1><p>Your message has been sent. You gave your email address as<p>
<nobr><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></nobr>


<p>If not correct, please
<script language='javascript' type='text/javascript'>
document.write('<a href="javascript:history.go(-1);">go back</a>');
</script>
<noscript>go back</noscript>
and send again.
<p>

<!-- CHANGE THE WORDING BELOW TO THE NAME OF YOUR SITE -->

<script language='javascript' type='text/javascript'>
document.write('<li><a href="http://web.iitd.ac.in/~virtual/">Return Back to Virtual Engineering Electromagnetics Laboratory, IIT Delhi</a>');
</script>

<script language='javascript' type='text/javascript'>
setTimeout('history.go(-2)', 9000);
</script>


<noscript>
<li>Click your 'back button' twice to return to main page
</noscript> 


<?php 
$message = stripslashes($message);
$message2 = stripslashes($message2); 
$message = strip_tags ($message);
$message2 = strip_tags ($message2);
// INSERT EMAIL ADDRESS to whon you want to sent message BELOW
mail("abegaonkar.mahesh@gmail.com", $sub3, $message, $headers);

// donot change this line
mail($email, $sub2, $message2, $headers2);
?> 

</body> 
</html> 



