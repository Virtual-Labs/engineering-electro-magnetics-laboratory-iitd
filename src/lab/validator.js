function emailCheck (emailStr) {
var checkTLD=1;
var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
var emailPat=/^(.+)@(.+)$/;
var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
var validChars="\[^\\s" + specialChars + "\]";
var quotedUser="(\"[^\"]*\")";
var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
var atom=validChars + '+';
var word="(" + atom + "|" + quotedUser + ")";
var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
var matchArray=emailStr.match(emailPat);
if (matchArray==null) {
alert("Your email address is missing or incorrectly spelled (check @ and .'s)");
return false;
}
var user=matchArray[1];
var domain=matchArray[2];
for (i=0; i<user.length; i++) {
if (user.charCodeAt(i)>127) {
alert("Your email emaddress contains invalid characters.");
return false;
   }
}
for (i=0; i<domain.length; i++) {
if (domain.charCodeAt(i)>127) {
alert("Your email domain name contains invalid characters.");
return false;
   }
}
if (user.match(userPat)==null) {
alert("Your email doesn't seem to be valid - check your spelling.");
return false;
}
var IPArray=domain.match(ipDomainPat);
if (IPArray!=null) {
for (var i=1;i<=4;i++) {
if (IPArray[i]>255) {
alert("Destination IP address is invalid!");
return false;
   }
}
return true;
}
var atomPat=new RegExp("^" + atom + "$");
var domArr=domain.split(".");
var len=domArr.length;
for (i=0;i<len;i++) {
if (domArr[i].search(atomPat)==-1) {
alert("Your email address does not seem to be valid - check your spelling, including wrong use of commas, or a full point [.] at the end of the address .");
return false;
   }
}
if (checkTLD && domArr[domArr.length-1].length!=2 && 
domArr[domArr.length-1].search(knownDomsPat)==-1) {
alert("Your email address must end in a well-known domain or two letter " + "country.");
return false;
}
if (len<2) {
alert("Your email address is missing a hostname - check spelling. Or you may have added a blank space at the end of the address - backspace to remove this.");
return false;
}
return true;
}

