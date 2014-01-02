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

$fromCityID = $_POST['fromCity'];
$toCityID = $_POST['toCity'];

$receiver = $_POST['receiver'];
$length = $_POST['length'];
$width = $_POST['width'];
$height = $_POST['height'];
$kg = $_POST['kg'];
$address = $_POST['address'];
$coupon = $_POST['coupon_code'];

$query = "select * from city where city_id = '$fromCityID'";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
	$fromCityName = $row['city_name'];
}

$query = "select * from city where city_id = '$toCityID'";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
	$toCityName = $row['city_name'];
}


if ( $fromCityID == null || $toCityID == null || $receiver == null || $length == null || $width == null || $height == null ||
			$kg  == null || $address == null)			
{
	echo "Fill empty blanks!";
}
else
{
	echo "<form action='branch_send_cargo_action.php' method='POST'>";
	
	$price = 5;
	
	session_start();

	$_SESSION['fromCity'] = $fromCityID;
	$_SESSION['toCity']=$toCityID ;
	$_SESSION['receiver'] = $receiver;
	$_SESSION['price'] = $price;
	$_SESSION['length'] = $length;
	$_SESSION['width'] = $width;
	$_SESSION['height'] = $height;
	$_SESSION['kg'] = $kg;
	$_SESSION['address'] = $address;
	$_SESSION['coupon'] = $coupon;

	if ( $coupon != null)
	{
	
	}
	else
	{
	
	}
	echo '<div class="jumbotron">';
 echo  '<p>';

	echo "From $fromCityName<br>";
	echo "To $toCityName<br>";
	echo "Address $address<br>";
	echo "Receiver $receiver<br>";
	echo "Size $length X $width X $height<br>" ;
	echo "KG $kg<br>";
	echo "Price	$price <br>";

	echo "</p>";
echo "</div>";
	echo "<input type='submit' value = 'Confirm'>";

}
?>