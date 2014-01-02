<?php

require_once "inc.php"; 
include("bootstrap.php");

echo "<form action='branch_cargo_confirm.php' method='POST'>";
echo "From City <select name='fromCity'>";
echo "<option></option>";
$query = "select * from city";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
	$name = $row['city_name'];
	$cityID= $row['city_id'];
	echo "<option value='$cityID'>$name</option>";
}
echo "</select><br>";


echo "To City <select name='toCity'>";
echo "<option></option>";
$query = "select * from city";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
	$name = $row['city_name'];
	$cityID= $row['city_id'];
	echo "<option value='$cityID'>$name</option>";
}
echo "</select><br>";

echo "Address <input type='text' name='address'><br>";

echo "Receiver <input type='text' name='receiver'><br>";
echo "Size <input type='text' name='length' value = 'Length'>";
echo "<input type='text' name='width' value = 'Width'>";
echo "<input type='text' name='height' value = 'Height'><br>";


echo "KG <input type='text' name='kg'><br>";
echo "Coupon Code <input type='text' name='coupon_code'><br>";

echo "<input type='submit' value = 'Calculate'>";


?>
