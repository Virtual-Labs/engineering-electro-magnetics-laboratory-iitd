<form action="feedout.php" method="post">
<!-- DO NOT change ANY of the php sections -->
<?php
$ipi = getenv("REMOTE_ADDR"); 
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>
<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
<h2 align="center">Feedback Form</h2>
<p>
 </p>
<p>Send Data to: <select name="attn" size="1">
<option value=" MT General Email ">General Email</option>

</select>
<br />
Name: <input type="text" name="nameis" size="20" /> Email:<input type="text" name="visitormail" size="20" />


<br/> Overall Rating:<br/> [<input checked="checked" name="rating" type="radio" value="good" /> Good]   [<input name="rating" type="radio" value="bad" /> Bad]   [<input name="rating" type="radio" value="ugly" /> Ugly] 
</p>
<p> Request additional features for a feedback tutorial:<br /> 
<input type="checkbox" name="emailvalidation" value="y" /> Email 'format' Validation - check @<br /> 
<input type="checkbox" name="fieldvalidation" value="y" /> Required Form Field Validation.<br />
<input type="checkbox" name="htmlcontrol" value="y" /> More intergratd HTML (in form).<br />
<input type="checkbox" name="phpform" value="y" /> Improved PHP form script generator.<br />
<input type="checkbox" name="htmlform" value="y" /> A complete HTML form generator. <br />
</p>
<br />
<h3 align="center">General Comments</h3> 
<p align="center">
<textarea name="feedback" rows="6" cols="30">Notes n comments here</textarea>
</p>
<hr />
<p align="center">
<input type="submit" value="Submit Feedback" />
</p>
<p>

</p>
</form>