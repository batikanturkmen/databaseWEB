<?php
include "inc.php";
include "bootstrap.php";

$query = "select * from city";
$result=  mysql_query($query);
echo	"<form action='index.php' method='GET'>";

// from  city
echo "<select name='fromCityID'>";


while ($row = mysql_fetch_array($result)){
	$fromCityName = $row['city_name'];
	$fromCityID = $row['city_id'];
	if ($fromCityID != 34) {
		echo "<option value='$fromCityID'>$fromCityName</option>";
	}
	else{
		echo "<option value='$fromCityID' selected>$fromCityName</option>";

	}
	
}
echo "</select><br/>";

// to CÝTY
echo	"<select name='toCityID'>";

$result=  mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$toCityName = $row['city_name'];
	$toCityID = $row['city_id'];
	if ($toCityID != 6) {
		echo "<option value='$toCityID'>$toCityName</option>";
	}
	else{
		echo "<option value='$toCityID' selected>$toCityName</option>";
	}
}

echo "</select><br>";

echo "Size: ";
?>

<div class="input-group">
  <input type="text" name='width' class="form-control" placeholder="Width" style="width:70px">
  <span class="glyphicon glyphicon-remove"></span>  
  <input type="text" name='height' class="form-control" placeholder="Height" style="width:70px">
  <span class="glyphicon glyphicon-remove"></span> 
  <input type="text" name='depth' class="form-control" placeholder="Depth" style="width:70px">

</div>
Weight:

<input type="text" name='weight' class="form-control" placeholder="Kilogram" style="width:90px">
<button type="submit" value = "Calculate" class="btn btn-default navbar-btn">Calculate</button>

<?php             
echo "</form>";

if (isset($_GET)) {
	$fromCityID= $_GET['fromCityID'];
	$toCityID = $_GET['toCityID'];

	$query = "SELECT price
			FROM route natural join from_to_city as FTC
			WHERE FTC.from_city = '$fromCityID'
			AND FTC.to_city = '$toCityID'";

	$result=  mysql_query($query);


	while ($row = mysql_fetch_array($result)){
		$price = $row['price'];
		echo '<div class="alert alert-success">';
  echo '<a class="alert-link">';
		echo "Price: $price";
echo "</a> </div>";
}


}

?>