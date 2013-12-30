<?php require_once "inc.php"; 
include("bootstrap.php");
?>

<!DOCTYPE html> 

<html>
    <head>
            <title>Cargo Company Web</title>
            <div id = "container" style = "width:100%">
                    <?php include("logo.php") ?>

                    <div id = "middle" style = "float:right; width: 25%;">
                            <?php 
                                if(!$_SESSION['login']) 
                                    include("loginMain.php");
                                else{
                                    echo '<br>';
                                    include("userinfo.php");
                                }
                            ?>
                    </div>
            </div>


            <?php include("menu.php") ?>


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
 
?>
<div class="jumbotron">
  <p>

<?php
echo "Info for your current system<br><br>";
 
echo "You are using: " . $browser . "<br>";
 
echo "Your IP is: " . $ip . "<br>";
 
echo "Your Hostname is: " . $hostname;
 
?>

<?php
echo "<br>";
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
echo "<br>";
print getip();
print $_SERVER['HTTP_USER_AGENT']; 
echo "<br>";
$newhostname = gethostname();
echo $newhostname;

echo "<br>";
$providerinfo = gethostbyaddr($_SERVER['REMOTE_ADDR']);  
echo $providerinfo;

?>

</p>
</div>