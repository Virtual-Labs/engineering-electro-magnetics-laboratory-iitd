<?
if(!empty($_POST)) extract($_POST);
if(!empty($_GET)) extract($_GET);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>BSW Feedback Form</title>

<META NAME="BSW" CONTENT="FEEDBACK FORM">

<style type="text/css">
<!--
body { margin-left: 5%; margin-right: 5%; font-family: verdana, helvetica, sans-serif, arial; font-size: 80%; background-color: #fffffd; }
h1 { font-family: helvetica, sans-serif, arial; color: #000000; font-size: 100%; margin-bottom: 0.0em; }
.table { font-size: 80%;}
.counter { margin:0px; border:solid; border-width:1px; border-color: white; font-size: 80%; }
input.text, textarea.text { font-family: verdana, helvetica, sans-serif, arial; background:"#DEE7EF"; border:solid; border-width:1px; border-color:#333399; margin: 2px 0px 0px 0px; font-size:100%;}
.hide { position:absolute; visibility:hidden; }
.show { position:absolute; visibility:visible; }
.feedbutton { background-color:#A7E1F5; font-weight:bold; }
.feedbutton1 { background-color:#80dcf2; font-weight:bold; }
-->
</style>

<!-- ADJUST ELEMENTS OF STYLE SHEET TO CHANGE FONT SIZE AND FACE,FORM OUTLINE AND BACKGROUND COLOR ETC -->
<!-- NOTE THAT THE LAST TWO LINES OF THE CSS SHEET ABOVE CONTROL THE PROGRESS BAR -->
<!-- WE SUGGEST THAT YOU DELETE ALL COMMENT TAGS ON THESE PAGES, AFTER YOU -->
<!-- HAVE MADE THE APPROPRIATE CHANGES ON ALL THESE PAGES -->

<script language="javascript" type="text/javascript">

function stoperror(){
return true
}
window.onerror=stoperror
</script>

<script language="javascript" type="text/javascript">

function placeFocus() {
if (document.forms.length > 0) {
var field = document.forms[0];
for (i = 0; i < field.length; i++) {
if ((field.elements[i].type == "text") || (field.elements[i].type == "textarea") || (field.elements[i].type.toString().charAt(0) == "s")) {
document.forms[0].elements[i].focus();
break;
         }
      }
   }
}
</script>


</head>

<body background="bg.jpg" bgcolor="#DEE7EF" onLoad="document.emailform.text.focus();placeFocus()">

<center>
<h1 align=left><font color="#FFFFFF"  size=5 face="Arial">B<font size=3>oard Of</font> <font size=5>S</font><font size=3>tudent </font><font size=5>W</font><font size=3>elfare</font></h1>
<br>
<table cellpadding=0 cellspacing=0 border=0 height="20" width="100%" bordercolor="#DEE7EF" RULES=ROWS FRAME=BOX>
<tr >
<td align=right><img src="hdleft.gif"></td>
<td background="hdbg.gif" >
<h1>Online Counselling / Feedback Form</h1>
</td>
<td align=left><img src="hdright.gif">
</td>
</tr></table>
<br>
<table bgcolor="#DEE7EF" border=0 width="90%">
<tr >
<td >&nbsp;
</td>
</tr>
<tr><td>&nbsp;</td><td valign="top">
<span style="color:red;font-weight:bold;"><?php echo $error ?></span>

<!-- The action executed is feedback1.php for other action change the source link below -->

<form name=emailform onsubmit="return emailCheck(this.email.value);" action="feedback1.php" method="post">  

<table class="table" border=0 bgcolor="#F8F8F8" bordercolor="#DEE7EF" RULES=ROWS FRAME=BOX>
<tr><td>
<label for="email">Your email address:</label>
</td>
<td>
<INPUT class="text" TYPE="TEXT" SIZE="28" NAME="email" value="<? echo $email; ?>" title=" YOUR email address "> 
</td></tr>

<tr><td>
<label for="sub">Subject:</label>
</td>
<td><INPUT class="text" TYPE="TEXT" SIZE="28" NAME="sub" value="<? echo $sub; ?>" title=" Enter a subject ">
</td></tr>

<tr><td colspan=2>
<label for="text">Message:</label><br>
<TEXTAREA class="text" ROWS="8" COLS="50" WRAP="virtual" NAME="text" onKeyUp=" val = this.value; if (val.length > 800) { alert('Sorry, you are over the limit of 800 characters'); this.value = val.substring(0,800); emailform.focus() } this.form.count.value=800-parseInt(this.value.length); "><? echo $text; ?>
</TEXTAREA><br>

<input type="text" class="counter" name="count" value="800" size="2" onFocus="this.blur" readonly> characters available

<?php $text_len = preg_match_all('/./', $str, $dummy); ?>

</td></tr>
<tr>
<td align=center colspan=2>

<INPUT TYPE="SUBMIT" VALUE=" Send email " name="Demo" title=" Click once and wait for confirmation screen " class=""feedbutton" onmouseover="this.className='feedbutton1'" onmouseout="this.className='feedbutton'" onClick="CallJS('Demo()')"> <noscript><b>Click and wait for confirmation page</b></noscript>

</td></tr>
</table>

<?
function title($filename) {
    $open=fopen("$filename","r");
                 while(!feof($open)) {
            $line=fgets($open,255);
                           $string = $line;
             while(ereg( '<title>([^<]*)</title>(.*)', $string, $regs ) ) {
                                   $string = $regs[2];
                                }
                   }
                 return $regs[1];
} 
if(isset($_SERVER['HTTP_REFERER'])) {
$file = $_SERVER['HTTP_REFERER'];
$title = title($file);

} else {
$title = "There was no referring page.";
}

?>

<INPUT TYPE="HIDDEN" NAME="title" VALUE="<?php print "$title"; ?>   <? echo $id;?>">


</form>

<!-- MAKE A CORRECT PATH TO PROGRESSBAR JAVASCRIPT IF YOU WISH TO USE IT -->
<!-- IF YOU DO NOT WISH TO USE IT, REMOVE THIS CODE: onClick="CallJS('Demo()') FROM THE --?
<!-- INPUT TYPE=SUBMIT LINE OF CODE, AS WELL AS THE LINK BELOW -->

<script language="JavaScript" src="progressbar.js" type=text/javascript>
</script>

<script language="javascript" type="text/javascript">
<!--
// THE CODE BELOW CREATES THE PROGRESS GRAPHIC. YOU CAN ADJUST FONT COLOR, SIZE, BACKGROUND 
//COLOR AND WORDING. REMOVE THIS BLOCK OF 18 LINES OF SCRIPT COMPLETELY IF YOU DO NOT WANT A PROGRESS BAR
// Create layer for progress dialog
//document.write("<span id=\"progress\" class=\"hide\">");
//	document.write("<FORM name=dialog>");
//	document.write("<TABLE border=0 bgcolor=\"#9F141A\">");
//	document.write("<TR><TD ALIGN=\"center\">");
//	document.write("<span style=\"color:white;font-size:70%;\">Please wait</span><BR>");
//	document.write("<input type=text style=\"border:solid;border-color:#9F141A;border-width:1px;\"name=\"bar\" size=\"" + _progressWidth/2 + "\"");
//	if(document.all||document.getElementById) 	// Microsoft, NS6
//		document.write(" bar.style=\"color:navy;\">");
//	else	// Netscape
//		document.write(">");
//	document.write("</TD></TR>");
//	document.write("</TABLE>");
//	document.write("</FORM>");
//document.write("</span>");
//ProgressDestroy();	// Hides
-->
</script>

</td>
<td bgcolor="#fffffd"  valign="top"></td><td>&nbsp; </td></tr>
<tr><td colspan=2>&nbsp;<a href="http://www.iitd.ac.in/bsw/"><font color="#FFF" size=2>Home</font></a>&nbsp; |&nbsp; <a href="http://www.iitd.ac.in"><font color="#FFF" size=2>IIT Delhi</font></a></td></tr>
</table>
</center>

<!-- IF YOU WISH TO ALSO DISPLAY YOUR EMAIL ADDRESS VISIBLY AS A MAILTO LINK -->
<!-- FOR THOSE WHO PREFER TO USE THEM, YOU WILL NEED THE CODE BELOW WITHIN BLOCKQUOTES -->


<noscript><li>Use your browser back button to return to previous page
</noscript>

</ul>
</blockquote>

<script language="JavaScript" src="validator.js" type=text/javascript>
</script>

</body>
</html>

