<?
if(!empty($_POST)) extract($_POST);
if (empty($email)) $error .= "You didn't enter your email address<br>"; 
if (empty($text)) $error .= "You didn't include a message<br>";
$str = $text; $text_len = strlen($str); 
if($text_len > 800) { $error .= "Sorry, you have used more than permitted 800 characters in your message. Total was $text_len - please shorten your message.<br>"; }

if($email) {
if(isset($_POST['email']))
{ 
// $email = $email; 
// check to make sure email has been filled out with valid address

if (preg_match('/^[-!#$%&\'*+\\.\/0-9=?A-Z^_`{|}~]+@([-0-9A-Z]+\.)+([0-9A-Z]){2,4}$/i', trim($email))) {
//do nothing the syntax looks good
}
else {$error .= "Your email address has a spelling error<BR>";
}//set error code

// check for valid domain name 
$ok = TRUE; 
$ok = eregi( "^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3}$", $email,
$check); 
$ok = getmxrr(substr(strstr($check[0], '@'), 1), $dummy); 
if($ok === false) 
{ 
$host = substr($email, strpos($email, '@') + 1); 
if(gethostbyname($host) != $host) 
{ 
$ok = true; 
} 
if ($ok != true) {$error .= "That email address does not seem to be valid - please check<br>"; } 
// end of check 
} 
}} // end of email check 

function spamcheck($array) {
  // returns true if data is ok, otherwise false if it is spam-looking
  return (!preg_match("/(MIME-Version:|Content-Type:|\n|\r)/i", join('',array_values($array)) ));
}

if($error) { 
include("feedback.php"); 
}
else { 
include("feedbacksent.php"); 
}
?>



