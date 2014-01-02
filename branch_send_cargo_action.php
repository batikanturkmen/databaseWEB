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

$fromCity = $_SESSION['fromCity'] ;
$toCity = $_SESSION['toCity'];
$receiver = $_SESSION['receiver'];
$price = $_SESSION['price'];
$length = $_SESSION['length']; 
$width = $_SESSION['width'];
$height = $_SESSION['height']; 
$kg =$_SESSION['kg'];
$address = $_SESSION['address'];

echo '<div class="jumbotron">';
 echo  '<p>';
echo "From $fromCity<br>";
echo "To $toCity<br>";
echo "Address $address<br>";
echo "Receiver $receiver<br>";
echo "Size $length X $width X $height<br>" ;
echo "KG $kg<br>";
echo "Price	$price <br>";
echo "</p>";
echo "</div>";


?>