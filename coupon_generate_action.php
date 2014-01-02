<?php
require_once "inc.php"; 
include("bootstrap.php");
function RandomString()
{
    $characters = ’0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ’;
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        $randstring =  $randstring.$characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
$percent = $_POST['percent'];

$code = RandomString();

$status = 0;
$query = "insert into coupon (coupon_code, coupon_factor, coupon_status) values ('$code', '$percent', '$status')";
$result=  mysql_query($query);
echo "$code is created!";
?>