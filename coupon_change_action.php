<?php

include "inc.php";

$code = $_SESSION['coupon_code'];
$percent = $_POST['percent'];
$status = $_POST['status'];

$query = "update coupon set coupon_factor = '$percent',coupon_status = '$status' where coupon_code = '$code'";
$result=  mysql_query($query);

echo "Coupon: $code is updated!";
?>