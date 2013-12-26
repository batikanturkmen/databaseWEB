<?php
if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Gecko') )
{
   if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape') )
   {
     $browser = 'Netscape (Gecko/Netscape)';
   }
   else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )
   {
     $browser = 'Mozilla Firefox (Gecko/Firefox)';
   }
   else
   {
     $browser = 'Mozilla (Gecko/Mozilla)';
   }
}
else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') )
{
   if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') )
   {
     $browser = 'Opera (MSIE/Opera/Compatible)';
   }
   else
   {
     $browser = 'Internet Explorer (MSIE/Compatible)';
   }
}
else
{
   $browser = 'Others browsers';
}
 
if ($_SERVER['HTTP_X_FORWARD_FOR']) {
$ip = $_SERVER['HTTP_X_FORWARD_FOR'];
} else {
$ip = $_SERVER['REMOTE_ADDR'];
}
 
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
echo "Hello Visitor, here is your Info:<br><br>";
 
echo "You are using: " . $browser . "<br>";
 
echo "Your IP is: " . $ip . "<br>";
 
echo "Your Hostname is: " . $hostname;
 
?>

<?php
function getip() {
if (isSet($_SERVER)) {
if (isSet($_SERVER["HTTP_X_FORWARDED_FOR"])) {
$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
} elseif (isSet($_SERVER["HTTP_CLIENT_IP"])) {
$realip = $_SERVER["HTTP_CLIENT_IP"];
} else {
$realip = $_SERVER["REMOTE_ADDR"];
}
} else {
if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
$realip = getenv( 'HTTP_X_FORWARDED_FOR' );
} elseif ( getenv( 'HTTP_CLIENT_IP' ) ) {
$realip = getenv( 'HTTP_CLIENT_IP' );
} else {
$realip = getenv( 'REMOTE_ADDR' );
}
}
return $realip; 
}

//print out the ip and browser information

print getip();
print $_SERVER['HTTP_USER_AGENT']; 
?>