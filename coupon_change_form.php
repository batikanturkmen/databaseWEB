<?php
include "inc.php";

$code = $_GET['code'];

$query = "SELECT * from coupon where coupon_code = '$code'";
$result=  mysql_query($query);

session_start();
$_SESSION['coupon_code'] = $code;
	
echo	"<form action='coupon_change_action.php' method='POST'>";		
while ($row = mysql_fetch_array($result)){
	$percent = $row['coupon_factor'];
	
	echo "Coupon Code: $code";
	echo "Percent: <input type='text' name='percent' value = $percent>";
	
	echo "Status <select name='status'>";
	echo "<option></option>";
	echo "<option value=0>in use</option>";
	echo "<option value=1>used</option>";
	echo "</select>";
	
	echo "<input type='submit' value = 'Change'>";
	
}
echo "</form>";


?>